<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->string('fullName')->default('Full Name');
            $table->string('fatherName')->default('Father Name');
            $table->string('motherName')->default('Mother Name');
            $table->string('profileAddress')->default('Address');
            $table->string('image')->default('img');
            $table->timestamps();

            $table->index('student_id');
            $table->foreign('student_id')->references('id')
                ->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
