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
            $table->string('name')->nullable();
            $table->foreignId('category_id')->nullable()->references('id')->on('listing_tag_categories')->onDelete('cascade');
          
            $table->dropColumn(['tag_name', 'tag_type']);
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
            $table->dropColumn(['category_id', 'name']);
            $table->string('tag_name')->nullable();
            $table->string('tag_type')->nullable();
        });
    }
}
