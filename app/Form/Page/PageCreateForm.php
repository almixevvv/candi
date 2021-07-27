<?php
namespace App\Form\Page;

use Gustiawan\FormBuilder\Form;

class PageCreateForm extends Form
{
    public function handle() 
    {
        $this->text('slug', 'Slug (Url)');
        $this->text('title', 'Title');
        $this->textArea('content', 'Content', ["class" => "wysiwyg"]);
        $this->radio('is_active', 'Active', [1 => "Yes", 0 => "No"]);
    }
}
