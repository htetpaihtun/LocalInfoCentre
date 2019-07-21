<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('usermail');
            $table->integer('user_ph_no')->unsigned();
            $table->text('user_description')->nullable();
            $table->string('status')->nullable(); // remove nullable
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('type','15')->nullable();   //reomove nullable
            $table->bigInteger('restaurant_id')->unsigned()->nullable();
            $table->string('restaurant_name')->nullable();
            $table->integer('restaurant_ph_no')->unsigned()->nullable();
            $table->bigInteger('hotel_id')->unsigned()->nullable();
            $table->string('hotel_name')->nullable();
            $table->integer('hotel_ph_no')->unsigned()->nullable();
            $table->string('seats');
            $table->string('time');
            $table->text('replied_description')->nullable();
            $table->timestamps();
        });

        Schema::table('bookings', function (Blueprint $table){
          $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
          $table->foreign('restaurant_id')
                ->references('id')->on('restaurants')
                ->onDelete('cascade');
          $table->foreign('hotel_id')
                ->references('id')->on('hotels')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
