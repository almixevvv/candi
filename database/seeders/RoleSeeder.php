<?php

namespace Database\Seeders;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Schema::disableForeignKeyConstraints();  // mysql feature msti di disable foreign key check
        Role::truncate();
        User::truncate();

        Role::create(['name' => 'superuser']);
        Role::create(['name' => 'employee']);

        $defaultPassword = 'abc123';

        $defaultUsers = array(
            [
                'username'          => 'candi.admin',
                'password'          =>  bcrypt($defaultPassword),
                'status'            => UserStatus::Active,
            ],
            [
                'username'          => 'agus24',
                'password'          =>  bcrypt("rahasia"),
                'status'            => UserStatus::Active,
            ],
            [
                'username'          => 'wisan',
                'password'          =>  bcrypt("1234"),
                'status'            => UserStatus::Active,
            ],
        );

        User::insert($defaultUsers);

        $user = User::first();
        $user->assignRole(["superuser", "employee"]);

        $user = User::find(2);
        $user->assignRole(["superuser", "employee"]);

        $user = User::find(3);
        $user->assignRole(["superuser", "employee"]);
        Schema::enableForeignKeyConstraints();
    }
}
