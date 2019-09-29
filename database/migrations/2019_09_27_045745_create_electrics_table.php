<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electrics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id')->default(1);
            $table->integer('roomNumber')->unique();
            $table->integer('previousMonth');
            $table->integer('currentMonth');
            $table->integer('diff');
            $table->integer('totalPrice');
            $table->date('updated_at');
            $table->string('status')->default('inactive');
            $table->foreign('service_id')->references('id')
                ->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electrics');
    }
}
