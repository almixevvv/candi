<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function(Blueprint $table) {
            $table->string("title")->default('');
            $table->text('details')->default('');
            $table->text('address')->default('');
            $table->float('lat')->default(0);
            $table->float('long')->default(0);
            $table->float('low_price')->default(0);
            $table->float('high_price')->default(0);

            $table->foreignId("category_id")->nullable()->references('id')->on('listing_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function(Blueprint $table) {
            $table->dropColumn("title");
            $table->dropColumn('details');
            $table->dropColumn('address');
            $table->dropColumn('lat');
            $table->dropColumn('long');
            $table->dropColumn('low_price');
            $table->dropColumn('high_price');
            $table->dropColumn('category_id');
        });
    }
}