<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldSlugListingModelBlogModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function(Blueprint $table) {
            $table->string('slug', 255)->default('');
        });

        Schema::table('blogs', function(Blueprint $table) {
            $table->string('slug', 255)->default('');
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
            $table->dropColumn('slug');
        });

        Schema::table('blogs', function(Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
