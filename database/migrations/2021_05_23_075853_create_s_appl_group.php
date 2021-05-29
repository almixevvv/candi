<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSApplGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_appl_group', function (Blueprint $table) {
            $table->id('id');
            $table->string('appl_group_id');
            $table->string('appl_group_name');
            $table->string('description');
            $table->string('status');
            $table->integer('order');
            $table->timestamp('created_at', $precision = 0);
        });

        $defaultApplGroup = array(
            [
                'appl_group_id'      => 'GENERAL',
                'appl_group_name'    => 'General Settings',
                'description'        => 'General Menu Settings',
                'status'             => 'ACTIVE',
                'order'              => 1
            ],
            [
                'appl_group_id'      => 'COMPANY',
                'appl_group_name'    => 'Company Settings',
                'description'        => 'Company Settings',
                'status'             => 'ACTIVE',
                'order'              => 2
            ],
            [
                'appl_group_id'      => 'SYSTEM',
                'appl_group_name'    => 'System Management Settings',
                'description'        => 'System Management Settings',
                'status'             => 'ACTIVE',
                'order'              => 3
            ],
        );

        DB::table('s_appl_group')->insert($defaultApplGroup);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_appl_group');
    }
}
