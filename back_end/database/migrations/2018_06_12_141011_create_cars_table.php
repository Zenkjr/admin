<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('license_number');
            $table->date('first_restration');
            $table->date('certificate_expiry');
            $table->integer('maker_id');
            $table->year('year');
            $table->integer('country_id');
            $table->smallInteger('engine');
            $table->smallInteger('horse_power');
            $table->smallInteger('tire_size');
            $table->integer('clazz_id');
            $table->integer('color_id');
            $table->text('description');
            $table->bigInteger('price');
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
        Schema::dropIfExists('cars');
    }
}
