<?php
namespace App\Form\ListingRatingCategory;

use Gustiawan\FormBuilder\Form;

class ListingRatingCategoryCreateForm extends Form
{
    public function handle() 
    {
        $this->text('name', 'Name');
    }
}
