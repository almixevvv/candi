<?php
namespace App\Form\ListingTags;

use App\Utils\Database;
use Illuminate\Http\Request;
use Gustiawan\FormBuilder\Form;
use App\Models\ListingTagCategory;
use Illuminate\Pagination\LengthAwarePaginator;

class ListingTagFilterForm extends Form
{
    public function handle() 
    {
        $this->text('name', "Name");
        $this->text('tags', 'Tags');

        $this->separator();

        $this->button('Search', 'btn-secondary');
    }

    public function filter(Request $request): LengthAwarePaginator
    {
        $listingTagsCategory = ListingTagCategory::with('tags')->orderBy('id');

        if ($request->name) {
            $listingTagsCategory = Database::whereLike($listingTagsCategory, "name", $request->name);
        }

        if ($request->tags) {
            $listingTagsCategory = $listingTagsCategory->orWhereHas('tags', function ($query) use($request) {
                return Database::whereLike($query, "name", $request->tags);
            });
        }

        return $listingTagsCategory->paginate(config('app.pagination_limit'));
    }
}
