<?php
namespace App\Form\BlogCategories;

use Gustiawan\FormBuilder\Form;

class BlogCategoriesCreateForm extends Form
{
    public function handle() 
    {
        $this->text('name', "Name");
    }
}
