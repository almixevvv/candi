<?php
namespace App\Form\Blog;

use App\Models\Blog;
use App\Utils\Utils;
use App\Utils\Database;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Gustiawan\FormBuilder\Form;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogFilterForm extends Form
{
    public function handle() 
    {
        $this->text('title', 'Title');
        $this->select('category_id', 'Category', Utils::createModelChoices(BlogCategory::all(), "id", "name"));
        $this->radio('is_featured', 'Is Featured', [1 => "Yes", 0 => "No"]);

        $this->separator();
        $this->button('Search', 'btn-secondary');
    }

    public function filter(Request $request): LengthAwarePaginator
    {
        $blogs = Blog::with('image', 'category')->orderBy('id', 'desc');

        if ($request->title) {
            $blogs = Database::whereLike($blogs, "title", $request->title);
        }

        if ($request->category_id) {
            $blogs = $blogs->where('category_id', $request->category_id);
        }

        if ($request->is_featured) {
            $blogs = $blogs->where('is_featured', $request->category_id);
        }

        return $blogs->paginate(config('app.pagination_limit'));
    }
}
