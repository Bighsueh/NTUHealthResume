<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealOrderCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_order_comment', function (Blueprint $table) {
            $table->id();
            $table->string('orderList_id')->nullable();
            $table->string('patient_id')->nullable();
            $table->double('carbohydrate')->nullable();
            $table->double('protein')->nullable();
            $table->double('fat')->nullable();
            $table->double('cal')->nullable();
            $table->double('na')->nullable();
            $table->double('k')->nullable();
            $table->double('ca')->nullable();
            $table->double('mg')->nullable();
            $table->double('vit_b12')->nullable();
            $table->double('vit_d')->nullable();
            $table->double('vit_e')->nullable();
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
        Schema::dropIfExists('meal_order_comment');
    }
}
