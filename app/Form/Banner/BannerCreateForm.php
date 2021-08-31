<?php
namespace App\Form\Banner;

use Gustiawan\FormBuilder\Form;

class BannerCreateForm extends Form
{
    public function handle() 
    {
        $this->upload('image', "Image");
        $this->number('position', "Position");
        $this->text("title", "Title");
        $this->text("button_text", "Button Text");
        $this->text("button_url", "Button Url");
        $this->radio("has_search", "Has Search", [ "1" => "Yes", "0" => "No"]);
    }
}
