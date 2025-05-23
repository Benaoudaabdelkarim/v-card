<div class="modal fade" id="showEnquiriesModal" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">{{ __('messages.enquiry_detail') }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 mb-5">
                        <label class="form-label fs-6 fw-bolder text-gray-700">
                           {{ __('messages.vcard.vcard_name') }} :
                        </label>
                        <p id="vcardName" class="text-gray-600 fw-bold mb-0"></p>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <label class="form-label fs-6 fw-bolder text-gray-700">
                            {{__('messages.common.name').':'}}
                        </label>
                        <p id="showName" class="text-gray-600 fw-bold mb-0"></p>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <label class="form-label fs-6 fw-bolder text-gray-700">
                            {{__('messages.common.email').':'}}
                        </label>
                        <p id="showEmail" class="text-gray-600 fw-bold mb-0"></p>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <label class="form-label fs-6 fw-bolder text-gray-700">
                            {{__('messages.common.phone').':'}}
                        </label>
                        <p id="showPhone" class="text-gray-600 fw-bold mb-0" dir="ltr"></p>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <label class="form-label fs-6 fw-bolder text-gray-700">
                            {{__('messages.common.message').':'}}
                        </label>
                        <p id="showMessage" class="text-gray-600 fw-bold mb-0 text-break"></p>
                    </div>
                    <div class="col-sm-12 mb-5 attachmentImageview">
                        <div class="d-block">
                            <a id="downloadAttachmentButton" href="#" target="_blank" class="text-decoration-none btn btn-primary d-none">{{__('messages.common.download')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
