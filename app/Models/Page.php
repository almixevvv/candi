<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public $fillable = ["slug", "title", "content", 'is_active'];

    public function menu() 
    {
        return $this->hasOne(Menu::class);
    }

    public function getIsActiveDisplayAttribute() 
    {
        return $this->is_active ? "Yes" : "No";
    }
}
