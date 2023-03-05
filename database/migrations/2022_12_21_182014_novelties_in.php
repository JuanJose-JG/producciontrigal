<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoveltiesIn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novelties_in', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('detail_production_work_id');
            $table->foreign('detail_production_work_id')->references('id')->on('detail_production_works');
            $table->unsignedBigInteger('novelties_out_id');
            $table->foreign('novelties_out_id')->references('id')->on('novelties_out');
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
        Schema::dropIfExists('novelties_in');
    }
}
