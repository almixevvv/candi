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
            "phone_number" => "628113700387",
            "email" => "contact@candi.id",
            "open_day_range" => "Monday - Friday",
            "open_hour_range" => "10:00 AM - 6:00 PM",
            "facebook" => "",
            "instagram" => "candi.id.official",
            "twitter" => "",
            "maps" => "",
        ]);
    }
}
