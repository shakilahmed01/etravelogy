<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_books', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->integer('adult');
            $table->integer('children');

            $table->string('room_type');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->integer('amount');

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
        Schema::dropIfExists('hotel_books');
    }
}
