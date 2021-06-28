<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyListingCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listing_categories', function (Blueprint $table) {
            $table->dropColumn(['category_id', 'status', 'icon']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listing_categories', function (Blueprint $table) {
            $table->string('category_id')->nullable();
            $table->string('icon')->nullable();
            $table->string('status')->nullable();
        });
    }
}
