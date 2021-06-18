<?php
namespace App\Utils;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;

class Utils 
{
    public static function createModelChoices(Collection $model, string $valueField, string $labelField): array
    {
        $choices = [];
        foreach ($model as $data) {
            $choices[$data->{$valueField}] = Str::titleFormat($data->{$labelField});
        }

        return $choices;
    }
}
