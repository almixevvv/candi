<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\ListingCategory;

class DirectoryCategories extends Component
{
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = ListingCategory::with('image')->orderBy('position')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.directory-categories');
    }
}
