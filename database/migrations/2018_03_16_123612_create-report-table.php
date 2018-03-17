<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('vehicle_id');
            $table->Integer('question_id')->unsigned();
            $table->String('answer');
            $table->String('uploaded');
            $table->DateTime('timestamp');
            $table->foreign('question_id')->references('question_id')->on('questions');
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles');
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
        Schema::dropIfExists('report');
    }
}
