<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::truncate();
        $data = [
            ["name" => "Destination"],
            ["name" => "Culinary"],
            ["name" => "Lifestyle"],
            ["name" => "Giveaway"],
        ];
        BlogCategory::insert($data);
    }
}
