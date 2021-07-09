<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyProfileSettingTableChangeYoutubeFieldToTwitter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile_settings', function (Blueprint $table) {
            $table->dropColumn('youtube');
            $table->string('twitter')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_settings', function (Blueprint $table) {
            $table->string('youtube')->default('');
            $table->dropColumn('twitter');
        });
    }
}
