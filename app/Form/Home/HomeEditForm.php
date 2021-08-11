<?php
namespace App\Form\Home;

use Gustiawan\FormBuilder\Form;

class HomeEditForm extends Form
{
    public function handle() 
    {
        $this->text("top_destination", "Top Destination Title");
        $this->text("sub_top_destination", "Top Destination Sub Title");
        $this->text("featured_blog", "Featured Blog Title");
        $this->text("sub_featured_blog", "Featured Blog Sub Title");
        $this->text("instagram_head", "Instagram Section Title");
        $this->text("sub_instagram_head", "Instagram Section Sub Title");
        $this->text("instagram_widget_url", "Instagram Section Sub Title");
    }
}
