<?php
namespace App\Form\FrontendMenu;

use App\Models\FrontendMenuCategory;
use App\Models\Page;
use App\Utils\Utils;
use Gustiawan\FormBuilder\Form;

class FrontendMenuCreateForm extends Form
{
    public function handle() 
    {
        $this->text('name', 'Name');
        $this->select('frontend_menu_category_id', 'Category', Utils::createModelChoices(FrontendMenuCategory::all(), "id", "name"));
        $this->select('page_id', 'Page', Utils::createModelChoices(Page::all(), "id", "title"), ["class" => "select2"]);
    }
}
