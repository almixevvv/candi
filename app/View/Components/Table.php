<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Pagination\LengthAwarePaginator;

class Table extends Component
{
    public LengthAwarePaginator $tableData;
    public array $title;
    public array $fields;

    public bool $hasDetail;
    public string $path;
    public bool $hasEdit = true;
    public bool $hasDelete = true;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(LengthAwarePaginator $data, array $title, array $fields, string $path, bool $hasDetail = false,
                                bool $hasEdit = true, bool $hasDelete = true)
    {
        $this->tableData = $data;
        $this->title = $title;
        $this->fields = $fields;
        $this->hasDetail = $hasDetail;
        $this->path = $path;
        $this->hasEdit = $hasEdit;
        $this->hasDelete = $hasDelete;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
