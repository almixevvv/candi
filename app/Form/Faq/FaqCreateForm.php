<?php
namespace App\Form\Faq;

use Gustiawan\FormBuilder\Form;

class FaqCreateForm extends Form
{
    public function handle() 
    {
        $this->text('question', "Question");
        $this->textArea('answer', "Answer");
        $this->number('position', "Position");
    }
}
