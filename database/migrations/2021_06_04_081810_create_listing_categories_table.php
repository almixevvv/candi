<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateListingCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category_id');
            $table->string('icon');
            $table->string('status');
            $table->timestamps();
        });

        $listingCategories = array(
            array(
                'name'          => 'Restaurant',
                'category_id'   => 'RST',
                'icon'          => '',
                'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Cafe',
                'category_id'   => 'CFE',
                'icon'          => '',
                'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Bar',
                'category_id'   => 'BAR',
                'icon'          => '',
                'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Tour Attraction',
                'category_id'   => 'TAT',
                'icon'          => '',
                'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Hotel & Resort',
                'category_id'   => 'HAR',
                'icon'          => '',
                'status'        => 'ACTIVE'
            ),
            array(
                'name'          => 'Shopping Center',
                'category_id'   => 'SHC',
                'icon'          => '',
                'status'        => 'ACTIVE'
            ),
        );

        DB::table('listing_categories')->insert($listingCategories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing_categories');
    }
}
