<?php
namespace App\Form\ListingGallery;

use Gustiawan\FormBuilder\Form;

class ListingGalleryCreateForm extends Form
{
    public function handle() 
    {
        $this->upload('image', 'Image');
    }
}
