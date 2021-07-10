<?php
namespace App\Form\BlogCategories;

use App\Utils\Database;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Gustiawan\FormBuilder\Form;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogCategoriesFilterForm extends Form
{
    public function handle() 
    {
        $this->text('name', 'Name');

        $this->separator();
        $this->button('Search', 'btn-secondary');
    }

    public function filter(Request $request): LengthAwarePaginator
    {
        $categories = BlogCategory::orderBy('id', 'desc');

        if ($request->name) {
            $categories = Database::whereLike($categories, "name", $request->name);
        }

        return $categories->paginate(config('app.pagination_limit'));
    }
}
