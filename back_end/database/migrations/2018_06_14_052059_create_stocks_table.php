<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id');
            $table->string('plate_num');
            $table->date('first_plate');
            $table->date('regis_expiry');
            $table->integer('country_id');
            $table->integer('color_id');
            $table->text('note');
            $table->date('in_at');
            $table->date('out_at');
            $table->bigInteger('price');
            $table->integer('status');
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
        Schema::dropIfExists('stocks');
    }
}
