<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoveltiesOut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novelties_out', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('detail_production_work_id');
            $table->foreign('detail_production_work_id')->references('id')->on('detail_production_works');
            $table->integer('number_people');
            $table->time('start_time');
            $table->time('end_time');
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
        Schema::dropIfExists('novelties_out');
    }
}
