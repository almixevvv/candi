<div style="position: relative">
    <div style="position: relative">
        <input
            type="text"
            class="search-box {{ (!empty($query) && $selectedListing == 0 && $showDropdown) ? "searching" : "" }}"
            style="width: 90%"
            placeholder="What are you looking for?"
            wire:model="query"
            {{-- wire:click="reset" --}}
            wire:keydown.escape="hideDropdown"
            wire:keydown.tab="hideDropdown"
            wire:keydown.Arrow-Up="decrementHighlight"
            wire:keydown.Arrow-Down="incrementHighlight"
            wire:keydown.enter.prevent="selectAccount"
        />
        <span style="position: absolute; top: 0.5em; bottom: 0px; left: 0.75em;">
            <img src="/images/search-hover.svg" style="width:1.25em;"></img>
        </span>

        @if ($selectedListing)
            <a class="absolute cursor-pointer top-2 right-2 text-gray-500" wire:click="reset">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        @endif
    </div>

    @if(!empty($query) && $selectedListing == 0 && $showDropdown)
        <div class="search-result">
            @if (count($listings))
                @foreach($listings as $i => $listing)
                    <div class="search-list {{ $highlightIndex === $i ? 'highlighted' : "" }}" onclick="window.location.href = '{{ route('directory.detail', ['directory' => $listing['id']]) }}'">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ $listing['image']['image_thumbnail'] }}" style="max-width: 8em;min-width: 5em;width: 100%;" />
                            </div>
                            <div class="col">
                                <b>{{ $listing['title'] }}</b><br>
                                <span style="font-style: italic;font-size: 0.75rem;">{{ $listing['category']['name'] }}</span><br>
                                <span><i class="fas fa-map-marker-alt"></i> {{ $listing['address'] }}</span><br>
                                <b>Rp {{ number_format($listing['low_price']) }} - {{ number_format($listing['high_price']) }}</b>
                            </div>
                        </diV>
                    </div>
                @endforeach
            @else
                <span class="block py-1 px-2 text-sm">No results!</span>
            @endif
        </div>
    @endif
</div>

@once
@push('extra-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
<style>
    .search-box {
        border-radius: 25px;
        width: 100%;
        padding-left: 3em;
        padding-top: .5rem !important;
        padding-bottom: .5rem !important;
        border: 1px solid #dee2e6 !important;
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075) !important;
    }

    .search-box::placeholder {
        color: #a7a7a7
    }

    .search-box.searching {
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-width: 0px !important;
    }

    .search-result {
        position: absolute;
        transform: translateY(2.5em);
        left: 0;
        top: 0;
        box-shadow: 0px 3px 9px #8c8c8c !important;
        width: 90%;
        background-color: white;
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
        border: 0px;
        height: 18em;
        overflow-y: auto;
    }

    .search-list {
        width:100%;
        padding: 1em !important;
    }

    .search-list * {
        cursor: pointer;
    }

    .search-list:last-child {
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
    }

    .search-list:hover {
        background-color: #f4f4f4;
    }
</style>
@endpush
@endonce
