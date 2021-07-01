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
        // $this->call(SApplSeeder::class);
        // $this->call(AreaSeeder::class);
        // $this->call(ListingCategorySeeder::class);
        WhoWeAre::create([
            "contents" => "empty content"
        ]);
        $this->call(MenuSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ProfileSettingSeeder::class);
    }
}
