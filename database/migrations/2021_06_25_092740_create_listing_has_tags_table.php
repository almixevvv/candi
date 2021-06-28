<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingHasTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_has_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId("listing_id")->references('id')->on('listings');
            $table->foreignId("listing_tag_id")->references('id')->on('listing_tags');
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
        Schema::dropIfExists('listing_has_tags');
    }
}
