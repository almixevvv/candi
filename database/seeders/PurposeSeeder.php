<?php

namespace Database\Seeders;

use App\Models\Purpose;
use Illuminate\Database\Seeder;

class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purpose::truncate();
        Purpose::insert([
            ["name" => "Kerja Sama"],
            ["name" => "Kritik dan Saran"],
        ]);
    }
}
