<div class="search-wrapper">
    <div style="position: relative; width: 100%">
        <div class="search-box-wrapper">
            <input
                type="text"
                class="search-box {{ (!empty($query) && $selectedListing == 0 && $showDropdown) ? "searching" : "" }}"
                placeholder="What are you looking for?"
                wire:model="query"
                {{-- wire:click="reset" --}}
                wire:keydown.escape="hideDropdown"
                wire:keydown.tab="hideDropdown"
                wire:keydown.Arrow-Up="decrementHighlight"
                wire:keydown.Arrow-Down="incrementHighlight"
            />
            <span style="position: absolute; top: 0.7em; bottom: 0px; left: 0.75em;">
                <i class="fas fa-search"></i>
            </span>
        </div>
        <div class="close-button-wrapper">
            <div class="close-button btn-primary-candi" id="close-search-button">X</div>
        </div>

        @if(!empty($query) && $selectedListing == 0 && $showDropdown)
            <div class="search-result">
                @if (count($listings))
                    @foreach($listings as $i => $listing)
                        <div class="search-list {{ $highlightIndex === $i ? 'highlighted' : "" }}" onclick="window.location.href = '{{ route('directory.detail', ['directory' => $listing['id']]) }}'">
                            <div class="row">
                                <div class="col-md-2">
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
</div>
