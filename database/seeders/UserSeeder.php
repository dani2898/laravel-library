<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->last_name = 'Laravel';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin1234');
        $user->is_admin = '1';
        $user->save();

        $user = new User();
        $user->name = 'Paul';
        $user->last_name = 'Smith';
        $user->email = 'paul@user.com';
        $user->password = bcrypt('paul1234');
        $user->is_admin = '2';
        $user->save();

        $user = new User();
        $user->name = 'Mary';
        $user->last_name = 'Davis';
        $user->email = 'mary@user.com';
        $user->password = bcrypt('mary1234');
        $user->is_admin = '2';
        $user->save();
    }
}
