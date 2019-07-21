<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_admins', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->integer('ph_no')->unsigned()->nullable(); //remove nullable
          $table->string('role')->nullable();
          $table->string('email')->unique();
          $table->string('password');
          $table->rememberToken();
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
        Schema::dropIfExists('info_admins');
    }
}
