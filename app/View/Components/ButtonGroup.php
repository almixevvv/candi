<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonGroup extends Component
{
    public bool $showEdit;
    public bool $showDelete;
    public string $editUrl;
    public string $deleteUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $editUrl, string $deleteUrl, bool $showEdit = true, bool $showDelete = true)
    {
        $this->showEdit = $showEdit;
        $this->showDelete = $showDelete;

        $this->editUrl = $editUrl;
        $this->deleteUrl = $deleteUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-group');
    }
}
