<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey', function (Blueprint $table) {
            $table->increments('survey_id');
            $table->Integer('brand_id')->unsigned();
            $table->Integer('question_id')->unsigned();
            $table->String('answer');
            $table->String('uploaded');
            $table->DateTime('timestamp');
            $table->foreign('brand_id')->references('brand_id')->on('brand');
            $table->foreign('question_id')->references('question_id')->on('questions');
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
        Schema::dropIfExists('survey');
    }
}
