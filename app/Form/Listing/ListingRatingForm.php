<?php
namespace App\Form\Listing;

use App\Utils\Utils;
use Gustiawan\FormBuilder\Form;
use App\Models\ListingRatingCategory;

class ListingRatingForm extends Form
{
    public function handle() 
    {
        $this->select('rating_category', 'Category', Utils::createModelChoices(ListingRatingCategory::all(), "id", "name"));
        $this->number('rating', 'Rating');
    }
}
