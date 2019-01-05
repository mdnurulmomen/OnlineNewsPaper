<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('color')->nullable();
            $table->string('headlines')->nullable();
            $table->string('frontcategories')->nullable();
            $table->string('logo')->nullable();
            $table->string('defaultpic')->nullable();
            $table->string('footer')->nullable();
            $table->string('newsverification')->default(1);
            $table->string('userregistration')->default(1);
            $table->string('emailverification')->nullable()->default(0);
            $table->string('smsverification')->nullable()->default(0);
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
        Schema::dropIfExists('settings');
    }
}
