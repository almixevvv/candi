<div class="row px-4">
    <div class="col-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($images as $key => $image)
                    <div class="carousel-item {{ $imageActive == $key ? "active" : "" }}">
                        <img class="w-100" src="{{ $image }}" alt="First slide">
                    </div>
                @endforeach
            </div>
            @if (count($images) > 1)
                <span class="carousel-control-prev" href="#" role="button" data-slide="prev" wire:click="previous">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </span>
                <span class="carousel-control-next" href="#" role="button" data-slide="next" wire:click="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </span>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="px-2">
            <div class="border-top mt-2 pt-2 rating-section">
                <div class="row">
                    @foreach($images as $key => $image)
                        <div class="col-md-2 {{ $imageActive == $key ? "image-active" : "" }}" wire:click="chooseImage({{ $key }})">
                            <img src="{{ $image }}" width="100%" height="200px" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@push('extra-css')
<style>
    .image-active {
        border: 5px solid #50e7e0;
        margin-right: 5px;
        margin-left: 5px;
        padding: 0;
    }
</style>
@endpush
