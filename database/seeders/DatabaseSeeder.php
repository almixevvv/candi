<?php

namespace Database\Seeders;

use App\Models\Image;
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
        Image::truncate();
        WhoWeAre::create([
            "contents" => "empty content"
        ]);
        $this->call(MenuSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ProfileSettingSeeder::class);
        $this->call(PurposeSeeder::class);
        $this->call(ListingCategorySeeder::class);

        $this->call(ListingSeeder::class);

        $this->call(ListingRatingSeeder::class);
        $this->call(FrontendMenuSeeder::class);
    }
}
