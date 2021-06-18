<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('s_appl');
        Schema::dropIfExists('s_appl_group');
        Schema::dropIfExists('s_group_appl');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('s_appl', function (Blueprint $table) {
            $table->id('id');
            $table->string('appl_id');
            $table->string('appl_group_id');
            $table->string('name');
            $table->string('description');
            $table->text('icon');
            $table->string('parent_id');
            $table->integer('order');
            $table->string('link');
            $table->timestamp('created_at', $precision = 0);
        });

        Schema::create('s_appl_group', function (Blueprint $table) {
            $table->id('id');
            $table->string('appl_group_id');
            $table->string('appl_group_name');
            $table->string('description');
            $table->string('status');
            $table->integer('order');
            $table->timestamp('created_at', $precision = 0);
        });
        Schema::create('s_group_appl', function (Blueprint $table) {
            $table->id('id');
            $table->string('group_id');
            $table->string('appl_id');
            $table->json('role');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(true);
        });
    }
}
