<?php
namespace App\Form\ListingTags;

use Gustiawan\FormBuilder\Form;

class ListingTagAddTagForm extends Form
{
    public function handle() 
    {
        $this->text('name', 'Name');
    }
}
