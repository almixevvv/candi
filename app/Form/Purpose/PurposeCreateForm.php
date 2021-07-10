<?php
namespace App\Form\Purpose;

use Gustiawan\FormBuilder\Form;

class PurposeCreateForm extends Form
{
    public function handle() 
    {
        $this->text('name', 'Name');
    }
}
