<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class S_Appl_Group extends Model
{
    use HasFactory;

    protected $table = 's_appl_group';

    public function submenu()
    {
        return $this->hasMany(Group_Appl::class);
    }
}
