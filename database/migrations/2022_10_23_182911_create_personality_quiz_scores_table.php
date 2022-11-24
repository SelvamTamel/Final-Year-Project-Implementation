<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personality_quiz_scores', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('extraversion');
            $table->tinyInteger('agreeableness');
            $table->tinyInteger('conscientiousness');
            $table->tinyInteger('neuroticism');
            $table->tinyInteger('openness');
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
        Schema::dropIfExists('personality_quiz_scores');
    }
};
