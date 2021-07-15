<div>
    <div class="page contacts-page full-width">

        <x-directory-categories />

        <div class="container-fluid px-0 d-block d-lg-none">
            <div class="row mx-0 g-0">
                <div class="col-12">
                    <div class="border-top border-bottom">
                        <div class="d-flex justify-content-center py-2" id="openFilter">
                            <h5 class="text-center font-weight-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                                Filter
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 directory-container mt-3 pb-5">

            <div class="row mx-0 g-0">

                <div class="col-lg-3 d-none d-lg-block px-4">

                    <div class="container mx-2 mt-3 bg-light rounded border p-3 mr-5">
                        <div class="pb-2">
                            @foreach($tagCategories as $index => $tagCategory)
                                <div class="{{ $index > 0 ? 'border-top mt-2 pt-3 ' : '' }} filter-form d-flex justify-content-between">
                                    <div>
                                        <span class="fw-bolder">{{ $tagCategory->name }}</span>
                                    </div>
                                </div>

                                @foreach($tagCategory->tags as $index => $tag)
                                    <div class="filter-form mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                    type="checkbox"
                                                    id="tag-{{ $tag->id }}"
                                                    @if(in_array($tag->id, $choosenTag))
                                                        checked
                                                        wire:click="removeTag({{ $tag->id }})"
                                                    @else
                                                        wire:click="addTag({{ $tag->id }})"
                                                    @endif
                                                    {{ in_array($tag->id, $choosenTag) ? "checked" : "" }}
                                            >
                                            <label class="form-check-label" for="tag-{{ $tag->id }}">
                                                {{ $tag->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>


                </div>

                <div class="col-12 col-lg-9">
                    @foreach($listingTags as $tag)
                        <div class="row mx-0 g-0">
                            <div class="col-12">
                                <div class="d-inline-flex justify-content-between directory-list px-3 pt-3">
                                    <div>
                                        <p>{{ $tag->name }}</p>
                                    </div>
                                    <div class="text-end">
                                        <a href="{{ route('directory') }}?tag={{ $tag->id }}">See All</a>
                                    </div>
                                </div>

                                <div class="d-flex directory-content">
                                    @foreach($tag->listings as $listing)
                                    <div class="card card-content">
                                        <div class="card-image-container">
                                            <div class="image-holder">
                                                @if ($listing->image)
                                                    <img src="{{ $listing->image->image_url }}" class="card-img-top" alt="{{ $listing->title }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-body position-relative">
                                            <h5 class="card-title">{{ $listing->title }}</h5>
                                            <div class="tags-holder">
                                                @foreach($listing->tags as $tag)
                                                    <span class="text-truncate">{{ $tag->name }} </span>
                                                @endforeach
                                                <i class="fas fa-circle"></i>
                                                <span>Rp {{ number_format($listing->low_price) }} - {{ number_format($listing->high_price) }}</span>
                                            </div>
                                            <a href="{{ route('directory.detail', ['directory' => $listing->id ]) }}" class="btn btn-primary btn-order">Order Online</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

    <div class="container-fluid filter-page px-0" id="filterPage">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between pt-3 border-bottom px-3 pb-2">
                <div class="text-start">
                    <span>Reset</span>
                </div>
                <div class="text-center">
                    <span>Filter</span>
                </div>
                <div class="text-end">
                    <span>
                        <i class="fas fa-times" id="closeFilter"></i>
                    </span>
                </div>
            </div>

            <div class="filter-inner px-3 pt-4">

                @foreach($tagCategories as $tagCategory)
                    <div class="pb-2">
                        <div class="d-flex justify-content-between">
                            <div>
                                <span>{{ $tagCategory->name }}</span>
                            </div>
                            <div class="text-end">
                                <span>See All</span>
                            </div>
                        </div>

                        @foreach($tagCategory->tags as $tag)
                            <div class="regular-grid filter-holder">
                                <span>
                                    <button>
                                        <span>{{ $tag->name }}</span>
                                    </button>
                                </span>
                            </div>
                        @endforeach
                    </div>
                @endforeach

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Restaurant Features</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Delivery</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Takeout</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Table Service</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Reservation</span>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Meals</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Breakfast</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Brunch</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Lunch</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Dinner</span>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Reservation</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="full-grid filter-holder">
                        <span>
                            <button>
                                <span>Online Reservations</span>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div class="text-start">
                            <span>Price</span>
                        </div>
                    </div>
                    <div class="price-grid filter-holder">
                        <span>
                            <button class="px-1">
                                <div>
                                    <span>$</span>
                                </div>
                                <div>
                                    <span>Cheap Eats</span>
                                </div>
                            </button>
                        </span>
                        <span>
                            <button>
                                <div>
                                    <span>$$ - $$$</span>
                                </div>
                                <div>
                                    <span>Mid Range</span>
                                </div>
                            </button>
                        </span>
                        <span>
                            <button>
                                <div>
                                    <span>$$$$</span>
                                </div>
                                <div>
                                    <span>Fine Dining</span>
                                </div>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Cuisine</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Asian</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Indonesian</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Internasional</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Seafood</span>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Dishes</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Salad</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Fish</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Burger</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Beef</span>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Dietary Restriction</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Vegetarian Friendly</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Vegan Options</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Halal</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Kosher</span>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="pb-2">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>Good For</span>
                        </div>
                        <div class="text-end">
                            <span>See All</span>
                        </div>
                    </div>
                    <div class="regular-grid filter-holder">
                        <span>
                            <button>
                                <span>Families with Children</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Kids</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Large Groups</span>
                            </button>
                        </span>
                        <span>
                            <button>
                                <span>Local Cuisines</span>
                            </button>
                        </span>
                    </div>
                </div>



            </div>

            <div class="filter-button">
                <div class="d-flex justify-content-center">
                    <button class="w-100 py-1 rounded">
                        <span>Apply</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
