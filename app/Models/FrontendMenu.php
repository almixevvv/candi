<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendMenu extends Model
{
    use HasFactory;

    public $fillable = ["name", 'page_id', 'frontend_menu_category_id'];

    public function page() 
    {
        return $this->belongsTo(Page::class);
    }

    public function category() 
    {
        return $this->belongsTo(FrontendMenuCategory::class, "frontend_menu_category_id", "id");
    }
}
