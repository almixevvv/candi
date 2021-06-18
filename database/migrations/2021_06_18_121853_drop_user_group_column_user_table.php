<?php

use App\Enums\UserStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropUserGroupColumnUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['user_group', 'status']);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->integer('status')->default(UserStatus::Inactive);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_group')->default('');
            $table->dropColumn('status');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->default('');
        });
    }
}
