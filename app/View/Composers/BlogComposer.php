<?php
namespace App\View\Composers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use App\View\Composers\ComposerContract;

class BlogComposer implements ComposerContract
{
    public function compose(View $view)
    {
        $blog = cache()->remember("blog", 60, function() {
            return Blog::orderBy('created_at', 'desc')->limit(3)->get();
        });

        $view->with('latest_blog', $blog);
    }
}
