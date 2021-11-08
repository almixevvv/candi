<?php

namespace Database\Seeders;

use App\Models\Purpose;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Purpose::truncate();
        Purpose::insert([
            ["name" => "Kerja Sama"],
            ["name" => "Kritik dan Saran"],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
