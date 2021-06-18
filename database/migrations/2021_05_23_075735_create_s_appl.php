<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSAppl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_appl');
    }
}
