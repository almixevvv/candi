<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;
use App\Models\ListingTag;
use App\Models\ListingRating;
use App\Models\ListingTagCategory;
use Illuminate\Support\Facades\DB;
use App\Models\ListingRatingCategory;

class Directories extends Component
{
    public $listingTags = [];
    public $tagCategories = [];
    public $ratingCategories = [];

    public $choosenTag = [];
    public $categoryID = null;
    public $choosenRating = null;

    // mobile
    public $checkedTag = [];
    public $filterIsOpen = false;

    public function mount($categoryID = null, $tag = null)
    {
        $this->categoryID = $categoryID;
        if ($tag) {
            $this->choosenTag[] = $tag;
        }

        $this->setupUI();
    }

    public function addTag($tag_id) 
    {
        $this->choosenTag[] = $tag_id;
        $this->setupUI();
    }

    public function removeTag($tag_id) 
    {
        $remove = null;
        foreach($this->choosenTag as $index => $tag) {
            if ($tag == $tag_id) {
                $remove = $index;
            }
        }
        unset($this->choosenTag[$remove]);
        $this->setupUI();
    }

    public function addCheckedTag($tag_id) 
    {
        $this->checkedTag[] = $tag_id;
        $this->setupUI();
    }

    public function removeCheckedTag($tag_id) 
    {
        $remove = null;
        foreach($this->choosenTag as $index => $tag) {
            if ($tag == $tag_id) {
                $remove = $index;
            }
        }
        unset($this->checkedTag[$remove]);
        $this->setupUI();
    }

    public function chooseRating($ratingID) 
    {
        if ($ratingID != $this->choosenRating) {
            $this->choosenRating = $ratingID;
        } else {
            $this->choosenRating = null;
        }
        $this->setupUI();
    }

    public function applyCheckedTag() 
    {
        $this->choosenTag = $this->checkedTag;
        $this->filterIsOpen = false;
        $this->setupUI();
    }

    public function openFilter() 
    {
        $this->filterIsOpen = true;
    }

    public function closeFilter() 
    {
        $this->filterIsOpen = false;
    }

    public function setupUI() 
    {
        $choosenRating = $this->choosenRating;
        $categoryID = $this->categoryID;

        $listingTags = ListingTag::with([
            'listings.image', 'listings.tags', 'listings.ratings',
            "listings" => function($query) use ($choosenRating, $categoryID) {
                $query->where('is_active', true);

                if ($choosenRating) {
                    $filteredListingIds = Listing::whereHas('ratings', function($query) use ($choosenRating) {
                        $query->where('listing_rating_category_id', $choosenRating);
                    })->select('id')->get()->map(fn ($listing) => $listing->id)->toArray();
    
                    $query->whereIn('listings.id', $filteredListingIds);
                }

                if ($categoryID) {
                    $query->where('category_id', $categoryID);
                }
            }
        ])->has('listings', '>', 0);

        if (count($this->choosenTag)) {
            $listingTags = $listingTags->whereIn('id', $this->choosenTag);
        }

        $this->listingTags = $listingTags->get();
        $this->tagCategories = ListingTagCategory::with('tags')->get();
        $this->ratingCategories = ListingRatingCategory::get();
    }

    public function render()
    {
        return view('livewire.directories');
    }
}
