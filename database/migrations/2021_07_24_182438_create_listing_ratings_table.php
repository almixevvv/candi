<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("listing_id")->references('id')->on('listings')->onDelete('cascade');
            $table->foreignId("listing_rating_category_id")->references('id')->on('listing_rating_categories')->onDelete('cascade');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing_ratings');
    }
}
