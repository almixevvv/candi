<?php
namespace App\Form\Users;

use App\Utils\Utils;
use App\Enums\UserStatus;
use Gustiawan\FormBuilder\Form;
use Spatie\Permission\Models\Role;

class UserCreateForm extends Form
{
    public function handle() 
    {
        $isUpdating = array_key_exists("isUpdating", $this->extra) ? $this->extra['isUpdating'] : false;

        $this->text('username', 'Username', ["readonly" => $isUpdating]);
        $this->password('password', 'Password');
        $this->password('password_confirmation', 'Password Confirmation');
        $this->radio("status", "Status", UserStatus::asSelectArray());
        $this->checkBox("roles", "Roles", Utils::createModelChoices(Role::all(), "name", "name"));
    }
}
