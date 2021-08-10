<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Collection;

trait HasPosition
{
    public function positionField() 
    {
        return "position";
    }

    public function preparePosition(int $currentPosition, ?int $excludedID = null)
    {
        $positions = $this->where($this->positionField(), ">=", $currentPosition);

        if ($excludedID) {
            $positions = $positions->where('id', "<>", $excludedID);
        }

        $positions = $positions->get();

        foreach($positions as $position) {
            $position->{$this->positionField()} = $position->{$this->positionField()} + 1;
            $position->save();
        }
    }
}
