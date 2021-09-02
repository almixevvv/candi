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
        <div class="">
            <div class="border-top mt-2 pt-2 rating-section">
                <div class="wrapper">
                    <div class="scrollable">
                        @foreach($images as $key => $image)
                            <img src="{{ $image }}" class="image {{ $imageActive == $key ? "image-active" : "" }}" width="100%" wire:click="chooseImage({{ $key }})" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
