<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Promotion;
use App\Utils\Database;

class PromotionPage extends Component
{
    public $sortable;
    public $choosenSortable = null;
    public $promotions = [];

    public $searchQuery = "";


    public function searchPromotion() 
    {
        $promotions = Promotion::with('image')->where('is_active', true)->where('valid_until', "<=", now());

        if ($this->searchQuery) {
            $promotions = Database::whereLike($promotions, "title", "{$this->searchQuery}%");
        }

        if ($this->choosenSortable == "Date") {
            $promotions = $promotions->orderBy('valid_until', 'desc');
        } else if ($this->choosenSortable == "Cashback") {
            $promotions = $promotions->orderBy('cashback', 'desc');
        } else if ($this->choosenSortable == "Discount") {
            $promotions = $promotions->orderBy('discount_percentage', 'desc')->orderBy('discount_value', 'desc');
        }

        $this->promotions = $promotions->limit(15)->get();
    }

    public function mount() 
    {
        $this->sortable = [
            "Date",
            "Cashback",
            "Discount",
        ];

        $this->searchPromotion();
    }

    public function render()
    {
        return view('livewire.promotion-page');
    }
}
