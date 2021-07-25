<?php
namespace App\Form\Promotion;

use Gustiawan\FormBuilder\Form;

class PromotionCreateForm extends Form
{
    public function handle() 
    {
        $this->text('title', 'Title');
        $this->date('valid_until', 'Valid Until');
        $this->upload('image', 'Image');
        $this->number('cashback', 'Cashback (%)');
        $this->number('discount_percentage', 'Discount Percentage (%)');
        $this->number('discount_value', 'Discount Value');
        $this->textArea('details', 'Details', ["class" => "wysiwyg"]);
    }
}
