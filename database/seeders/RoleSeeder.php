<?php

namespace Database\Seeders;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
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
        );

        User::insert($defaultUsers);

        $user = User::first();
        $user->assignRole(["superuser", "employee"]);
    }
}
