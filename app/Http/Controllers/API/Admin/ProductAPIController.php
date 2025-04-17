<?php

namespace App\Http\Controllers\API\Admin;

use App\Models\Vcard;
use App\Models\Product;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\VcardProductRepository;

class ProductAPIController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     */
    private $vcardProductRepo;

    public function __construct(VcardProductRepository $vcardProductRepo)
    {
        $this->vcardProductRepo = $vcardProductRepo;
    }

    public function index() {}

    public function getVcardProducts($vcardId)
    {

        $products = Product::where('vcard_id', $vcardId)
            ->whereHas('vcard', function ($query) {
                $query->where('tenant_id', getLogInTenantId());
            })
            ->get();


        if (empty($products)) {
            return $this->sendError('Product not found.');
        }

        $products->makeHidden(['created_at', 'updated_at', 'media'])->toArray();

        return $this->sendResponse($products, 'Products retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = Product::$rules;
        $rules['vcard_id'] = 'required';
        $rules['product_icon'] = 'required|file|mimes:jpg,jpeg,png|max:2048';

        $validator = validator()->make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first());
        }

        $vcard = Vcard::findOrFail($request->vcard_id);

        if ($vcard->tenant_id != getLogInTenantId()) {
            return $this->sendError('Vcard not found.');
        }
        $input = $request->all();

        $product = $this->vcardProductRepo->store($input);

        return $this->sendSuccess('Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $product = Product::where('id', $id)
            ->whereHas('vcard', function ($query) {
                $query->where('tenant_id', getLogInTenantId());
            })
            ->first();

        if (empty($product)) {
            return $this->sendError('Product not found.');
        }

        $product = $product->makeHidden(['created_at', 'updated_at', 'media'])->toArray();

        return $this->sendResponse($product, 'Product retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = Product::$rules;
        $rules['product_icon'] = 'file|mimes:jpg,jpeg,png|max:2048';

        $validator = validator()->make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first());
        }

        $product = Product::where('id', $id)
            ->whereHas('vcard', function ($query) {
                $query->where('tenant_id', getLogInTenantId());
            })
            ->first();

        if (empty($product)) {
            return $this->sendError('Product not found.');
        }

        $input = $request->all();

        $products = $this->vcardProductRepo->update($input, $id);

        return $this->sendSuccess('Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)
            ->whereHas('vcard', function ($query) {
                $query->where('tenant_id', getLogInTenantId());
            })
            ->first();

        if (empty($product)) {
            return $this->sendError('Product not found.');
        }
        $product->delete();

        return $this->sendSuccess('Product deleted successfully.');
    }

    public function getCurrencyList()
    {
        $currecny = getCurrencies();

        return $this->sendResponse($currecny, 'Currency list retrieved successfully.');
    }
}   
