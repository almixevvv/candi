<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_group', function (Blueprint $table) {
            $table->id('id');
            $table->string('group_id');
            $table->string('group_name');
            $table->string('description');
            $table->string('status');
            $table->timestamp('created_at', $precision = 0);
        });

        $defaultUserGroup = array(
            [
                'group_id'      => 'ADMIN',
                'group_name'    => 'Administrator',
                'description'   => 'System Administrator',
                'status'        => 'ACTIVE'
            ],
            [
                'group_id'      => 'SALES',
                'group_name'    => 'Sales Admin',
                'description'   => 'Sales Administrator',
                'status'        => 'ACTIVE'
            ],
            [
                'group_id'      => 'GENERAL',
                'group_name'    => 'General Staff',
                'description'   => 'General Staff',
                'status'        => 'ACTIVE'
            ],
        );

        DB::table('s_group')->insert($defaultUserGroup);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_group');
    }
}
