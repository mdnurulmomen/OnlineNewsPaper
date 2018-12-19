<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('username');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('picpath')->nullable();
            $table->string('emailverification')->nullable();
            $table->string('smsverification')->nullable();
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
        Schema::dropIfExists('editors');
    }
}
