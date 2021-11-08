<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FrontendMenuCategory;
use Illuminate\Support\Facades\Schema;

class FrontendMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        FrontendMenuCategory::truncate();
        FrontendMenuCategory::create([
            "code" => "footer",
            "name" => "Footer",
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
