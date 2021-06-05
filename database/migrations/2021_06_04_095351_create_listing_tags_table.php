<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateListingTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag_name');
            $table->string('tag_type');
            $table->timestamps();
        });

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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing_tags');
    }
}
