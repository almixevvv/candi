<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->string('button_url')->nullable();
            $table->string('button_text')->nullable()->default('');
            $table->boolean('has_search')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('button_url');
            $table->dropColumn('button_text');
            $table->dropColumn('has_search');
        });
    }
}
