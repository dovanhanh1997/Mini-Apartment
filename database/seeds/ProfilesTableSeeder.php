<?php

use App\Profile;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = new Profile();
        $profile->student_id = 1;
        $profile->profileAddress = 'Address';
        $profile->profileImage = 'home-bg.jpg';
        $profile->save();
    }
}
