<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();

      Schema::create('restaurants', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->char('name',50);
          $table->string('mail')->unique();
          $table->integer('ph_no')->unsigned()->nullable();
          $table->text('address')->nullable();
          $table->char('img')->nullable();
          $table->char('profile_img')->nullable();
          $table->char('status')->nullable();
          $table->char('available_rooms')->nullable();
          $table->bigInteger('owner_id')->unsigned();
          $table->timestamps();
        });

        Schema::table('restaurants',function($table){
          $table->foreign('owner_id')
          ->references('id')->on('admins')
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
        Schema::dropIfExists('restaurants');
    }
}
