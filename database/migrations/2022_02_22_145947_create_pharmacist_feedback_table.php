<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacistFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacist_feedback', function (Blueprint $table) {
            $table->id('pharmacist_feedback_id')->autoIncrement();
            $table->integer('task_id');
            $table->string('feedback_1')->nullable();
            $table->string('feedback_2')->nullable();
            $table->string('feedback_3')->nullable();
            $table->string('feedback_4')->nullable();
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
        Schema::dropIfExists('pharmacist_feedback');
    }
}
