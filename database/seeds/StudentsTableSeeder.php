<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student->studentName = 'Do Hanh';
        $student->room_id = 1;
        $student->studentAge = '22';
        $student->studentPhone = '0123456789';
        $student->gender = 'Male';
        $student->save();
        $student = new Student();
        $student->studentName = 'Do Nam';
        $student->room_id = 1;
        $student->studentAge = '23';
        $student->studentPhone = '0123456789';
        $student->gender = 'Male';
        $student->save();
        $student = new Student();
        $student->studentName = 'Van Tuan';
        $student->room_id = 2;
        $student->studentAge = '24';
        $student->studentPhone = '0123456789';
        $student->gender = 'Male';
        $student->save();
    }
}
