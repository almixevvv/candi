<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FrontendMenuCategory;

class FrontendMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FrontendMenuCategory::truncate();
        FrontendMenuCategory::create([
            "code" => "footer",
            "name" => "Footer",
        ]);
    }
}
