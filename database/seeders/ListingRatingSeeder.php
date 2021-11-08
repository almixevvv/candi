<?php

namespace Database\Seeders;

use App\Models\ListingRatingCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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

        Schema::disableForeignKeyConstraints();
        ListingRatingCategory::truncate();
        ListingRatingCategory::insert($data);
        Schema::enableForeignKeyConstraints();
    }
}
