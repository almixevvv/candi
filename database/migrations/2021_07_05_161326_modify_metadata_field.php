<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyMetadataField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('metadata', function (Blueprint $table) {
            $table->dropColumn('model_id');
        });
        Schema::table('metadata', function (Blueprint $table) {
            $table->unsignedInteger('model_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metadata', function (Blueprint $table) {
            $table->dropColumn('model_id');
        });
        Schema::table('metadata', function (Blueprint $table) {
            $table->string('model_id');
        });
    }
}
