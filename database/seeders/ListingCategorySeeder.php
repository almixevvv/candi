<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\ListingCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ListingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->listing_categories_seeder();
        // $this->listing_tags_seeder();
    }

    private function listing_categories_seeder() 
    {
        $modelName = "App\Models\ListingCategory";
        ListingCategory::truncate();
        Image::where('model_name', $modelName)->delete();
        $categories = [
            [
                "name" => "Bar",
                "files" => [public_path("images/icon-bar.svg"), storage_path('app/public/ListingCategory/2021/6/28/icon-bar.svg')],
                "filename" => "icon-bar.svg",
            ],
            [
                "name" => "Cafe",
                "files" => [public_path("images/icon-cafe.svg"), storage_path('app/public/ListingCategory/2021/6/28/icon-cafe.svg')],
                "filename" => "icon-cafe.svg",
            ],
            [
                "name" => "Hotel",
                "files" => [public_path("images/icon-hotel.svg"), storage_path('app/public/ListingCategory/2021/6/28/icon-hotel.svg')],
                "filename" => "icon-hotel.svg",
            ],
            [
                "name" => "Restaurant",
                "files" => [public_path("images/icon-restaurant.svg"), storage_path('app/public/ListingCategory/2021/6/28/icon-restaurant.svg')],
                "filename" => "icon-restaurant.svg",
            ],
            [
                "name" => "Shopping",
                "files" => [public_path("images/icon-shopping.svg"), storage_path('app/public/ListingCategory/2021/6/28/icon-shopping.svg')],
                "filename" => "icon-shopping.svg",
            ],
            [
                "name" => "Tour",
                "files" => [public_path("images/icon-tour.svg"), storage_path('app/public/ListingCategory/2021/6/28/icon-tour.svg')],
                "filename" => "icon-tour.svg",
            ],
        ];

        foreach ($categories as $category) {
            $listingCategory = ListingCategory::create([
                'name' => $category['name'],
            ]);
    
            Image::create([
                "model_name" => $modelName,
                "model_id" => $listingCategory->id,
                "image_url" => "ListingCategory/2021/6/28/" . $category['filename'],
                "image_thumbnail" => "ListingCategory/2021/6/28/" . $category['filename'],
                "metadata" => "[]"
            ]);

            File::copy($category['files'][0], $category['files'][1]);
        }
    }

    private function listing_tags_seeder() 
    {
        $listingCategories = array(
            array(
                'tag_name'          => 'Seafood',
                'tag_type'          => 'Cuisine',
            ),
            array(
                'tag_name'          => 'Barbeque',
                'tag_type'          => 'Cuisine',
            ),
            array(
                'tag_name'          => 'Grill',
                'tag_type'          => 'Cuisine',
            ),
            array(
                'tag_name'          => 'Chinese',
                'tag_type'          => 'Cuisine',
            ),
            array(
                'tag_name'          => 'Korean',
                'tag_type'          => 'Cuisine',
            ),
            array(
                'tag_name'          => 'Asian',
                'tag_type'          => 'Cuisine',
            ),
            array(
                'tag_name'          => 'Takeout',
                'tag_type'          => 'Feature',
            ),
            array(
                'tag_name'          => 'Parking Available',
                'tag_type'          => 'Feature',
            ),
            array(
                'tag_name'          => 'Reservations',
                'tag_type'          => 'Feature',
            ),
            array(
                'tag_name'          => 'Outdoor Seatings',
                'tag_type'          => 'Feature',
            ),
            array(
                'tag_name'          => 'Street Parking',
                'tag_type'          => 'Feature',
            ),
            array(
                'tag_name'          => 'Accepts American Express',
                'tag_type'          => 'Feature',
            ),

        );

        DB::table('listing_tags')->insert($listingCategories);
    }
}
