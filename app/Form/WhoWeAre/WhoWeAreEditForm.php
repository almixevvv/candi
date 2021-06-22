<?php
namespace App\Form\WhoWeAre;

use Gustiawan\FormBuilder\Form;

class WhoWeAreEditForm extends Form
{
    public function handle() 
    {
        $this->textarea('contents', 'Contents', ["class" => "wysiwyg"]);
    }
}
