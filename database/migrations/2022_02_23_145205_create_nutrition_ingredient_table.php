<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition_ingredient', function (Blueprint $table) {
            $table->id();
            $table->string('diet_log_id');
            $table->double('carbohydrate');
            $table->double('protein');
            $table->double('fat');
            $table->double('cal');
            $table->double('na');
            $table->double('k');
            $table->double('ca');
            $table->double('mg');
            $table->double('vit_b12');
            $table->double('vit_d');
            $table->double('vit_e');
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
        Schema::dropIfExists('nutrition_ingredient');
    }
}
