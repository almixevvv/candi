<?php

namespace App\Models;

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    public $fillable = ['id', 'name', 'permission', 'icon', 'route', 'child_of', 'position'];

    public static function createNew(array $data, bool $bulk = False) 
    {
        $menu = new static;
        if ($bulk) {
            foreach ($data as $value) {
                if (array_key_exists("position", $value) && array_key_exists('child_of', $value)) {
                    $menu->rearrangePosition($value['child_of'], $value['position']);
                }
            }

            $menu->insert($data);
        } else {
            if (array_key_exists("position", $data) && array_key_exists('child_of', $data)) {
                $menu->rearrangePosition($data['child_of'], $data['position']);
            }

            $menu->create($data);
        }
    }

    public function rearrangePosition(int $child, int $position)
    {
        $menuChilds = $this->where('child_of', $child)->where('position', $position)->orderBy('position');
        if ($menuChilds->exists()) {
            foreach($this->where('child_of', $child)->where('position', '>=', $position)->get() as $mustUpdate) {
                $selectedMenu = $this->find($mustUpdate->id);
                $selectedMenu->position = $selectedMenu->position + 1;
                $selectedMenu->save();
            }
        }
    }

    public function subMenu()
    {
        return $this->hasMany(self::class, 'child_of');
    }

    public function getParentAttribute()
    {
        if ($this->child_of == 0) {
            return 'No Child';
        }

        return self::where('id', $this->child_of)->first()->name;
    }

    public function current()
    {
        foreach ($this->subMenu as $submenu) {
            if (Route::current()->getName() == $submenu->route) {
                return true;
            }
        }

        return false;
    }
}
