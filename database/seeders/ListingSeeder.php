<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Listing;
use App\Models\ListingTag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Listing::truncate();
        $listings = Listing::factory()->count(10)->create();
        Image::where('model_name', "App\Models\Listing")->delete();

        foreach($listings as $listing) {
            Image::create([
                "model_id" => $listing->id,
                "model_name" => "App\Models\Listing",
                "image_url" => "http://lorempixel.com/640/480/",
                "image_thumbnail" => "http://lorempixel.com/440/280/",
                "metadata" => []
            ]);

            $listing->tags()->attach(ListingTag::all()->random(2));
        }

        Schema::enableForeignKeyConstraints();
    }
}
