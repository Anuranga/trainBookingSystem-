<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainBooking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('train_id');
            $table->integer('seat_number');
            $table->integer('available_seat');
            $table->boolean('booking_status');
            $table->integer('passenger_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainBooking');
    }
}
