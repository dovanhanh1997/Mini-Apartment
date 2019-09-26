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
        $user->name = 'Do Hanh';
        $user->email = 'dovanhanh12b@gmail.com';
        $user->password = bcrypt('dovanhanh123');
        $user->save();
    }
}
