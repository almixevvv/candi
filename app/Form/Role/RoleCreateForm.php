<?php
namespace App\Form\Role;

use Gustiawan\FormBuilder\Form;

class RoleCreateForm extends Form
{
    public function handle() 
    {
        $this->text('name', 'Name');
    }
}
