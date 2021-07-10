<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purpose extends Model
{
    use HasFactory;

    public $fillable = ["name"];

    public function contacts() 
    {
        return $this->hasMany(Contact::class);
    }
}
