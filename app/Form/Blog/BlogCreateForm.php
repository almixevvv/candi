<?php
namespace App\Form\Blog;

use App\Utils\Utils;
use App\Models\BlogCategory;
use Gustiawan\FormBuilder\Form;

class BlogCreateForm extends Form
{
    public function handle() 
    {
        $this->text("title", "Title");
        $this->textArea("content", "Content", ["class" => "wysiwyg"]);
        $this->radio("category_id", "Category", Utils::createModelChoices(BlogCategory::all(), "id", "name"));
        $this->upload("image", "Header Image");
    }
}
