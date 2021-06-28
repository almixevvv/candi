<?php
namespace App\Form\ListingCategory;

use Gustiawan\FormBuilder\Form;

class ListingCategoryCreateForm extends Form
{
    public function handle() 
    {
        $this->text('name', 'Name');
        $this->upload('image', 'Image');
    }
}
