<?php
namespace App\Form\ListingTags;

use Gustiawan\FormBuilder\Form;

class ListingTagsCreateForm extends Form
{
    public function handle() 
    {
        $this->text('name', "Name");
    }
}
