<div>
    <button type="button" class="btn btn-primary" style="float:right" onclick="showModal('modalFilter')">
        <i class="fas fa-search"></i> Filter
    </button>
    <div class="modal fade" id="modalFilter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search</h5>
                    <i class="fas fa-times" onclick="hideModal('modalFilter')" style="cursor: pointer"></i>
                </div>
                <div class="modal-body">
                    <x-form-generator-form :form="$form" />
                </div>
            </div>
        </div>
    </div>
</div>

@once
    @push('extra-js')
        <script src="{{ asset('js/cms/extra.js') }}"></script>
    @endpush
@endonce
