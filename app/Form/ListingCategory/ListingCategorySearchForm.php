<?php
namespace App\Form\ListingCategory;

use App\Utils\Database;
use Illuminate\Http\Request;
use App\Models\ListingCategory;
use Gustiawan\FormBuilder\Form;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ListingCategorySearchForm extends Form
{
    public function handle() 
    {
        $this->text('category', "Category");

        $this->separator();

        $this->button('Search', 'btn-secondary');
    }

    public function filter(Request $request): LengthAwarePaginator
    {
        $listingCategories = ListingCategory::with('image')->orderBy('id', 'desc');

        if ($request->category) {
            $listingCategories = Database::whereLike($listingCategories, "name", $request->category);
        }

        return $listingCategories->paginate(config('app.pagination_limit'));
    }
}
