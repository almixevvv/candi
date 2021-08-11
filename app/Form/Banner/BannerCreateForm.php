<?php
namespace App\Form\Banner;

use Gustiawan\FormBuilder\Form;

class BannerCreateForm extends Form
{
    public function handle() 
    {
        $this->upload('image', "Image");
        $this->number('position', "Position");
    }
}
