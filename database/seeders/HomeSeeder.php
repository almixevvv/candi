<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::truncate();
        Home::create([
            "top_destination" => "Top Destinations",
            "sub_top_destination" => "Find out detailed information in a place that you want to know more about.",
            "featured_blog" => "Discover Our Journey Stories",
            "sub_featured_blog" => "Let's take a look at the best recommended places to visit and reviews about them",
            "instagram_head" => "Our Instagram Posts",
            "sub_instagram_head" => "Let's take a look at our latest instagram posts.",
            "instagram_widget_url" => "http://lightwidget.com/widgets/b613fc91fd595ea1977f73997b998929.html",
        ]);
    }
}
