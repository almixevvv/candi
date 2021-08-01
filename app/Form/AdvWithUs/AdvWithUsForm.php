<?php
namespace App\Form\AdvWithUs;

use Gustiawan\FormBuilder\Form;

class AdvWithUsForm extends Form
{
    public function handle() 
    {
        $this->textArea('content', 'Content', ['class' => "wysiwyg"]);
    }
}
