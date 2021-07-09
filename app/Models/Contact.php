<?php

namespace App\Models;

use App\Models\Purpose;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = true;

    protected $fillable = [
    	"name", "email", "message", "purpose_id"
    ];

    public function purpose() 
    {
        return $this->belongsTo(Purpose::class);
    }
}
