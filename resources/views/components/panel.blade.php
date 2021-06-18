
<div class="card card-custom gutter-b">
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">{{ $title }}</span>
        </h3>
    </div>
    <div class="card-body">
        @if ($backButton)
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ url()->previous() }}" class="btn btn-warning"> Back</a>
                </div>
            </div><br>
        @endif
        @if ($createUrl)
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ $createUrl }}" class="btn btn-primary">Create</a>
                </div>
            </div><br>
        @endif
        <div class="row">
            <div class="col-md-12">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
