<?php

namespace Database\Seeders;

use App\Models\ListingRatingCategory;
use Illuminate\Database\Seeder;

class ListingRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name" => "Food"],
            ["name" => "Service"],
            ["name" => "Value"],
        ];
        ListingRatingCategory::truncate();
        ListingRatingCategory::insert($data);
    }
}
