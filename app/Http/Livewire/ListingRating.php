<?php

namespace App\Http\Livewire;

use App\Utils\Utils;
use App\Models\Listing;
use Livewire\Component;
use App\Models\ListingRatingCategory;
use App\Models\ListingRating as ListingRatingModel;

class ListingRating extends Component
{
    public Listing $listing;
    public $ratingCategories;
    public $ratings = [
        [
            "category_id" => null,
            "rating" => 0
        ]
    ];

    public $errorIndex = [];

    public function addNewRating() 
    {
        $this->ratings[] = [
            "category_id" => null,
            "rating" => 0
        ];
    }

    public function delete($key) 
    {
        $this->error_message = "";
        $this->errorIndex = [];
        unset($this->ratings[$key]);
        $this->ratings = array_values($this->ratings);
    }

    public function validateData() 
    {
        $categoryIds = [];
        foreach ($this->ratings as $rating) 
        {
            if (in_array($rating['category_id'], $categoryIds)) {
                session()->flash("error_message", "Duplicate category");
                return false;
            }

            if ($rating['rating'] == 0 || $rating['rating'] > 5) {
                session()->flash("error_message", "Rating value must between 1 to 5");
                return false;
            }
            $categoryIds[] = $rating['category_id'];
        }

        return true;
    }

    public function save() 
    {
        if ($this->validateData()) {
            $data = [];
            foreach ($this->ratings as $rating) {
                $data[] = [
                    "listing_id" => $this->listing->id,
                    "listing_rating_category_id" => $rating['category_id'],
                    "rating" => $rating['rating'],
                    "created_at" => now(),
                    "updated_at" => now()
                ];
            }

            $ratingIds = $this->listing->ratings->map(fn ($value) => $value->id);
            ListingRatingModel::whereIn("id", $ratingIds)->delete();
            ListingRatingModel::insert($data);

            session()->flash('message', "Rating has been updated");
            session()->flash('message_type', "success");
            redirect(route('cms.listings.index'));
        }
    }

    public function mount($listing) 
    {
        $this->listing = $listing;
        if ($this->listing->ratings->count()) {
            $this->ratings = $listing->ratings->map(function($value) {
                return [
                    "category_id" => $value->listing_rating_category_id,
                    "rating" => $value->rating,
                ];
            })->toArray();
        }
        $this->ratingCategories = Utils::createModelChoices(ListingRatingCategory::all(), "id", "name");
    }

    public function render()
    {
        return view('livewire.listing-rating');
    }
}
