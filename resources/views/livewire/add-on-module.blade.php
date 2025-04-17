<div class="row mt-4">
    @foreach ($addOnModules as $addOnModule)
        @if (isModuleInstalled($addOnModule->name))
        <div class="col-md-3 mb-4">
            <div class="card text-center border-primary"  style="width: 320px; height: 320px;">
                <div class="card-body">
                    <div class="card-icon mb-5">
                        {{-- <img src="{{ asset('assets/img/add_on/google_wallet.png') }}" width="45px" height="45px" alt="google-wallet"> --}}
                        <img src="{{ asset('assets/img/add_on/' . strtolower(str_replace(' ', '_', $addOnModule->name)) . '.png') }}" width="45px" height="45px" alt="{{ strtolower(str_replace(' ', '_', $addOnModule->name)) }}">
                    </div>
                    <div class="mb-4">
                        <h5 class="card-title">{{ $addOnModule->name }}</h5>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-600">
                            {{ __('messages.addon.' . strtolower(str_replace(' ', '_', $addOnModule->name)) . '_sort_desc') }}
                        </p>
                    </div>
                    <div>
                        <button type="button"
                            class="btn {{ $addOnModule->status == 1 ? 'btn-danger' : 'btn-primary' }} btn-sm disableModule"
                            data-id="{{ $addOnModule->id }}">
                            {{ $addOnModule->status == 1 ? __('messages.disable') : __('messages.enable') }}
                        </button>
                        <a href="javascript:void(0)"
                            title="{{ __('messages.common.delete') }}"
                            class="btn px-1 text-danger fs-3  add-on-delete-btn"
                            data-id="{{ $addOnModule->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
</div>
