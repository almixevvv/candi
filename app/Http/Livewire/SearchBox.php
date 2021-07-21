<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;

class SearchBox extends Component
{
    public $query = '';
    public array $listings = [];
    public int $selectedListing = 0;
    public int $highlightIndex = 0;
    public bool $showDropdown = false;

    public function mount()
    {
        $this->reset();
    }

    public function reset(...$properties)
    {
        $this->listings = [];
        $this->highlightIndex = 0;
        $this->query = '';
        $this->selectedListing = 0;
        $this->showDropdown = true;
    }

    public function hideDropdown()
    {
        $this->showDropdown = false;
    }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->listings) - 1) {
            $this->highlightIndex = 0;
            return;
        }

        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->listings) - 1;
            return;
        }

        $this->highlightIndex--;
    }

    public function selectAccount($id = null)
    {
        $id = $id ?: $this->highlightIndex;

        $account = $this->listings[$id] ?? null;

        if ($account) {
            $this->showDropdown = true;
            $this->query = $account['title'];
            $this->selectedListing = $account['id'];
        }
    }

    public function updatedQuery()
    {
        $this->listings = Listing::with('image', 'tags', 'category')->where('title', 'ILIKE', '%' . $this->query. '%')
            ->take(5)
            ->get()
            ->map(function ($value) {
                $value->tag_string = $value->tags->map(fn($val) => $val->name)->join(', ');
                return $value;
            })
            ->toArray();
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
