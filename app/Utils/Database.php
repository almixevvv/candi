<?php
namespace App\Utils;

use Illuminate\Database\Eloquent\Builder;

class Database 
{
    public static function whereLike(Builder $query, string $field, mixed $value, bool $optional = false): Builder
    {
        $likeOperator = "LIKE";
        if (config('database.default') == "pgsql") {
            $likeOperator = "ILIKE";
        }

        if ($optional) {
            $query->orWhere($field, $likeOperator, "%" . $value . "%");
        }

        return $query->where($field, $likeOperator, "%" . $value . "%");
    }
}
