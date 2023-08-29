<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateInitialAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();

        User::create([
            'email' => 'admin.account@sun-asterisk.com',
            'password' => bcrypt('12345678'),
            'first_name' => 'Admin',
            'last_name' => 'Account',
            'is_active' => true,
            'username' => 'admin-account',
            'is_admin' => true,
        ]);
    }
}
