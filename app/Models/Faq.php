<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    public $fillable = ["question", "answer", "position"];

    public function rearrangePosition(int $position)
    {
        $menuChilds = $this->where('position', $position)->orderBy('position');
        if ($menuChilds->exists()) {
            foreach($this->where('position', '>=', $position)->get() as $mustUpdate) {
                $selectedMenu = $this->find($mustUpdate->id);
                $selectedMenu->position = $selectedMenu->position + 1;
                $selectedMenu->save();
            }
        }
    }
}
