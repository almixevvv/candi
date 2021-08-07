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
        $this->radio('is_featured', 'Is Featured', [1 => "Yes", 0 => "No"]);
        $this->upload("image", "Header Image");

        $this->separator('Metadata');

        $this->textArea('description', 'Meta Description');
        $this->text('keywords', 'Meta Keywords (comma separated)');
        $this->text('canonical', 'Meta Canonical');
        $this->text('robots', 'Robots');
    }
}
