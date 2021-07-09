<?php

namespace Database\Seeders;

use App\Models\ProfileSetting;
use Illuminate\Database\Seeder;

class ProfileSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileSetting::truncate();
        ProfileSetting::create([
            "address" => "asdfasdfasdf",
            "phone_number" => "(021) 731 - 9564",
            "email" => "contact@candi.id",
            "open_day_range" => "Monday - Friday",
            "open_hour_range" => "10:00 AM - 6:00 PM",
            "facebook" => "",
            "instagram" => "",
            "twitter" => "",
            "maps" => "",
        ]);
    }
}
