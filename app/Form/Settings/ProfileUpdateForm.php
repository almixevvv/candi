<?php
namespace App\Form\Settings;

use Gustiawan\FormBuilder\Form;

class ProfileUpdateForm extends Form
{
    public function handle() 
    {
        $this->textArea('address', 'Address');
        $this->text("phone_number", "Phone Number");
        $this->text("email", "Email");
        $this->text("open_day_range", "Open Day Range");
        $this->text("open_hour_range", "Open Hour Range");
        $this->text("facebook", "Facebook");
        $this->text("instagram", "Instagram");
        $this->text("twitter", "Twitter");
        $this->text("maps", "Maps");
    }
}
