<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyListingTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listing_tags', function(Blueprint $table) {
            $table->foreignId('category_id')->references('id')->on('listing_tag_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listing_tags', function(Blueprint $table) {
            $table->dropColumn('category_id');
        });
    }
}
