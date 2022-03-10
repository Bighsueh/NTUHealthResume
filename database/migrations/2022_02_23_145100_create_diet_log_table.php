<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diet_log', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->nullable();
            $table->string('task_id')->nullable();
            $table->string('meal_order')->nullable();
            $table->string('meal_name')->nullable();
            $table->double('quantity')->nullable();
            $table->string('img_src')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('diet_log');
    }
}
