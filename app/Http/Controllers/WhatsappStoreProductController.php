<?php

namespace App\Http\Controllers;

use App\Models\WpOrder;
use Laracasts\Flash\Flash;
use App\Models\WpOrderItem;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\WhatsappStore;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\WhatsappStoreProduct;
use App\Http\Requests\WpProductBuyRequest;
use App\Http\Requests\UpdateWhatsappProductRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Http\Requests\CreateWhatsappStoreProductRequest;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class WhatsappStoreProductController extends AppBaseController
{
    public function store(CreateWhatsappStoreProductRequest $request)
    {
        $input = $request->all();
        $access = WhatsappStore::findOrFail($input['whatsapp_store_id']);
        if (!$access->tenant_id == getLogInTenantId()) {
            return $this->sendError('Unauthorized.');
        }

        $product = WhatsappStoreProduct::create($input);

        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {
                $product->addMedia($image)->toMediaCollection(
                    WhatsappStoreProduct::PRODUCT_IMAGES,
                    config('app.media_disc')
                );
            }
        }

        return $this->sendSuccess(__('messages.flash.wp_product_create'));
    }

    public function edit(WhatsappStoreProduct $wpStoreProduct)
    {
        $access = $wpStoreProduct->tenant_id == getLogInTenantId();
        if (!$access) {
            return $this->sendError('Unauthorized.');
        }
        $wpStoreProduct->load(['currency', 'category']);

        return $this->sendResponse($wpStoreProduct, 'Product retrieved successfully.');
    }


    public function update(WhatsappStoreProduct $wpStoreProduct, UpdateWhatsappProductRequest $request)
    {

        $access = $wpStoreProduct->tenant_id == getLogInTenantId();

        if (!$access) {
            return $this->sendError('Unauthorized.');
        }

        $input = $request->all();

        $wpStoreProduct->update($input);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $wpStoreProduct->addMedia($image)->toMediaCollection(
                    WhatsappStoreProduct::PRODUCT_IMAGES,
                    config('app.media_disc')
                );
            }
        }

        return $this->sendSuccess(__('messages.flash.wp_product_update'));
    }


    public function destroy($id)
    {
        $product = WhatsappStoreProduct::findOrFail($id);

        try {

            $isDelete = $product->ordersItems()->whereHas('wpOrder', function ($query) {
                $query->whereIn('status', [WpOrder::PENDING, WpOrder::DISPATCHED]);
            })->exists();

            if ($isDelete) {
                return $this->sendError('Product has orders.');
            }

            if ($product->tenant_id != getLogInTenantId()) {
                return $this->sendError('Unauthorized.');
            }

            $product->clearMediaCollection(WhatsappStoreProduct::PRODUCT_IMAGES);
            $product->delete();

            return $this->sendSuccess('Product deleted successfully.');
        } catch (\Exception $e) {

            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    public function destroyMedia($id)
    {
        $media = Media::findOrFail($id);

        if ($media->model_type != WhatsappStoreProduct::class) {
            return $this->sendError('Unauthorized.');
        }

        $media->delete();

        return $this->sendSuccess(__('messages.flash.product_image_delete'));
    }

    public function productBuy(WpProductBuyRequest $request)
    {
        if ($request->ajax()) {
            try {
                DB::beginTransaction();
                $input = $request->except('products');

                $products = json_decode($request->input('products'), true);

                $alias = $request->url_alias;

                $whatsappStore = WhatsappStore::where('url_alias', $alias)->first();
                if (!$whatsappStore) {
                    abort(404);
                }

                $orderID = Str::upper(Str::random(8));

                $input['order_id'] = $orderID;

                $wpOrder = WpOrder::create($input);

                foreach ($products as $product) {
                    $wpOrderItem = WpOrderItem::create([
                        'wp_order_id' => $wpOrder->id,
                        'product_id' => $product['id'],
                        'price' => $product['price'],
                        'qty' => $product['qty'],
                        'total_price' => $product['total_price'],
                    ]);
                }
                DB::commit();

                $wpOrder->load(['products.product.currency']);

                return $this->sendResponse($wpOrder, 'Order Created Successfully.');
            } catch (\Exception $e) {

                DB::rollBack();

                return $this->sendError($e->getMessage());
            }
        }
    }

    public function showOrder(WpOrder $wpOrder)
    {
        $access = $wpOrder->wpStore->tenant_id == getLogInTenantId();
        if (!$access) {
            Flash::error(__('Unauthorized.'));
            return redirect()->back();
        }
        $wpOrder->load(['products.product']);

        return $this->sendResponse($wpOrder, 'Order retrieved successfully.');
    }

    public function updateOrderStatus(Request $request, WpOrder $wpOrder)
    {
        $access = $wpOrder->wpStore->tenant_id == getLogInTenantId();
        if (!$access) {
            Flash::error(__('Unauthorized.'));
            return redirect()->back();
        }

        $status = $request->input('status');

        $wpOrder->update(['status' => $status]);

        $wpOrder->load(['products.product.currency', 'wpStore:id,url_alias']);

        $baseUrl = config('app.url');


        return $this->sendResponse([$wpOrder, $baseUrl], 'Order status updated successfully.');
    }
}
