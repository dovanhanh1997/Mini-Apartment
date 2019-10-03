<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Amdmin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
    }
}
