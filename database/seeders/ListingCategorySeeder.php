<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $listingCategories = array(
            array(
                'name'          => 'Restaurant',
                // 'category_id'   => 'RST',
                // 'icon'          => 'icon-restaurant.svg',
                // 'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Cafe',
                // 'category_id'   => 'CFE',
                // 'icon'          => 'icon-cafe.svg',
                // 'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Bar',
                // 'category_id'   => 'BAR',
                // 'icon'          => 'icon-bar.svg',
                // 'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Tour Attraction',
                // 'category_id'   => 'TAT',
                // 'icon'          => 'icon-tour.svg',
                // 'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Hotel & Resort',
                // 'category_id'   => 'HAR',
                // 'icon'          => 'icon-hotel.svg',
                // 'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Shopping Center',
                // 'category_id'   => 'SHC',
                // 'icon'          => 'icon-shopping.svg',
                // 'status'        => 'ACTIVE'
            ),
        );

        DB::table('listing_categories')->insert($listingCategories);
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
