<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;
use App\Models\ListingTag;
use App\Models\ListingTagCategory;

class Directories extends Component
{

    public $listingTags = [];
    public $tagCategories = [];
    public $choosenTag = [];
    public $categoryID = null;

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
        $listingTags = ListingTag::with('listings.image', 'listings.tags')->has('listings', '>', 0);
        if (count($this->choosenTag)) {
            $listingTags = $listingTags->whereIn('id', $this->choosenTag);
        }

        if ($this->categoryID) {
            $categoryID = $this->categoryID;
            $listingTags = $listingTags->whereHas('listings', function($query) use($categoryID) {
                $query->where('category_id', $categoryID);
            });
        }

        $this->listingTags = $listingTags->get();
        $this->tagCategories = ListingTagCategory::with('tags')->get();
    }

    public function render()
    {
        return view('livewire.directories');
    }
}
