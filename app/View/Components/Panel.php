<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Panel extends Component
{
    public string $title;
    public ?string $createUrl = null;
    public bool $backButton = false;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, ?string $createUrl = null, bool $backButton = false)
    {
        $this->title = Str::titleFormat($title);
        $this->backButton = $backButton;
        $this->createUrl = $createUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.panel');
    }
}
