<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGroupAppl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_group_appl', function (Blueprint $table) {
            $table->id('id');
            $table->string('group_id');
            $table->string('appl_id');
            $table->json('role');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(true);
        });

        $defaultRole = array(
            'VIEW',
            'ADD',
            'EDIT',
            'DELETE'
        );

        // APPL LIST
        // 'APPL_ID'           => 'LISTING',
        //     'APPL_ID'           => 'CREATE_LISTING',
        //     'APPL_ID'           => 'SHOW_LISTING',
        //     'APPL_ID'           => 'STORIES',
        //     'APPL_ID'           => 'CREATE_STORIES',
        //     'APPL_ID'           => 'SHOW_STORIES',
        //     'APPL_ID'           => 'SUBSCRIBERS',
        //     'APPL_ID'           => 'SHOW_SUBSCRIBERS',
        //     'APPL_ID'           => 'USER',
        //     'APPL_ID'           => 'CREATE_USER',
        //     'APPL_ID'           => 'SHOW_USER',
        //     'APPL_ID'           => 'USER_GROUP',
        //     'APPL_ID'           => 'CREATE_USER_GROUP',
        //     'APPL_ID'           => 'SHOW_USER_GROUP',
        //     'APPL_ID'           => 'CATEGORY',
        //     'APPL_ID'           => 'CREATE_CATEGORY',
        //     'APPL_ID'           => 'SHOW_CATEGORY',

        $defaultUserGroup = array(
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'LISTING',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'CREATE_LISTING',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'SHOW_LISTING',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'STORIES',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'CREATE_STORIES',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'SUBSCRIBERS',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'SHOW_SUBSCRIBERS',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'USER',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'CREATE_USER',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'SHOW_USER',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'USER_GROUP',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'CREATE_USER_GROUP',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'SHOW_USER_GROUP',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'CATEGORY',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'CREATE_CATEGORY',
                'role'          => json_encode($defaultRole)
            ],
            [
                'group_id'      => 'ADMIN',
                'appl_id'       => 'SHOW_CATEGORY',
                'role'          => json_encode($defaultRole)
            ],
            // UNUSED (YET)
            // [
            //     'GROUP_ID'      => 'SALES',
            //     'APPL_ID'       => '',
            //     'ROLE'          => json_encode($defaultRole)
            // ],
            // [
            //     'GROUP_ID'      => 'GENERAL',
            //     'GROUP_ID'      => 'ADMIN',
            //     'APPL_ID'       => '',
            //     'ROLE'          => json_encode($defaultRole)
            // ],
        );

        DB::table('s_group_appl')->insert($defaultUserGroup);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_group_appl');
    }
}
