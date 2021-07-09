
<div class="card card-custom gutter-b">
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">{{ $title }}</span>
        </h3>
    </div>
    <div class="card-body">
        <div class="row">
            @if ($backButton)
                <div class="col">
                    <a href="{{ url()->previous() }}" class="btn btn-warning"> Back</a>
                </div>
            @endif
            @if ($createUrl)
                <div class="col">
                    <a href="{{ $createUrl }}" class="btn btn-primary">Create</a>
                </div>
            @endif
            @if ($filterButton)
                <div class="col-md-2">
                    <x-modal-form :form="$form" />
                </div>
            @endif
        </div><br>
        <div class="row">
            <div class="col-md-12">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
