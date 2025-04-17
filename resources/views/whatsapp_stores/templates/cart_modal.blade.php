      <!-- Modal -->
      <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header px-0 pt-0">
                      <input type="hidden" value="{{ $whatsappStore->id }}" id="whatsappStoreId">
                      <h5 class="modal-title fs-20 fw-6" id="exampleModalLabel">
                          {{ __('messages.whatsapp_stores_templates.cart_items') }}
                      </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body pb-0">
                      <div class="overflow-auto">
                          <table class="table table-borderless mb-20">
                              <thead>
                                  <tr>
                                      <th class="fw-6 fs-16 pt-0">{{ __('messages.whatsapp_stores.products') }}</th>
                                      <th class="fw-6 fs-16 pt-0">{{ __('messages.common.price') }}</th>
                                      <th class="fw-6 fs-16 pt-0 text-center">
                                          {{ __('messages.whatsapp_stores_templates.quantity') }}</th>
                                      <th class="fw-6 fs-16 pt-0 pe-0 text-end">
                                          {{ __('messages.whatsapp_stores_templates.total_price') }}</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody id="cartItems">

                              </tbody>
                              <tfoot>
                                  <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td class="fs-18 fw-6 text-end pe-0" id="grandTotal">
                                          {{ __('messages.whatsapp_stores.grand_total') }}: 0
                                      </td>
                                      <td></td>

                                  </tr>
                              </tfoot>
                          </table>
                      </div>
                      <button type="button" data-bs-toggle="modal" data-bs-target="#orderNowModal"
                          class="btn btn-primary m-0 w-100 order-btn">
                          {{ __('messages.whatsapp_stores_templates.order_now') }}
                      </button>
                  </div>
              </div>
          </div>
      </div>
