<?php
namespace App\Form\ListingCategory;

use Gustiawan\FormBuilder\Form;

class ListingCategoryCreateForm extends Form
{
    public function handle() 
    {
        $this->text('name', 'Name');
        $this->number('position', 'Position');
        $this->upload('image', 'Image');
    }
}
