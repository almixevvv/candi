<?php

namespace Database\Seeders;

use App\Models\WhoWeAre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        WhoWeAre::truncate(); // should truncate who we are before running
        WhoWeAre::create([
            "contents" => "empty content"
        ]);
        $this->call(MenuSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ProfileSettingSeeder::class);
        $this->call(PurposeSeeder::class);
    }
}
