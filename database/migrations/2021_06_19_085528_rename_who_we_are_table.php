<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameWhoWeAreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('g_whoarewes');

        Schema::create('who_we_ares', function (Blueprint $table) {
            $table->id();
            $table->text('contents');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('g_whoarewes', function (Blueprint $table) {
            $table->id();
            $table->json('contents');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(true);
        });

        Schema::dropIfExists('who_we_ares');
    }
}
