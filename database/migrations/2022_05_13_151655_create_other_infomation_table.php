<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherInfomationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_information', function (Blueprint $table) {
            $table->id('other_info_id')->autoIncrement();
            $table->integer('task_id');
            $table->string('Weight')->nullable();
            $table->string('Height')->nullable();
            $table->string('Diagnosis')->nullable();
            $table->string('Surgery')->nullable();
            $table->string('Hb')->nullable();
            $table->string('Alb')->nullable();
            $table->string('AST')->nullable();
            $table->string('Cre')->nullable();
            $table->string('CCr')->nullable();
            $table->string('Suger')->nullable();
            $table->string('HbA1C')->nullable();
            $table->string('TCHO')->nullable();
            $table->string('TG')->nullable();
            $table->string('LDL')->nullable();
            $table->string('UA')->nullable();
            $table->string('HDL')->nullable();
            $table->string('Fall')->nullable();
            $table->string('medication_adherence_1')->nullable();
            $table->string('medication_adherence_2')->nullable();
            $table->string('medication_adherence_3')->nullable();
            $table->string('drug_side_effect')->nullable();
            $table->string('drug_side_effect_text')->nullable();
            $table->text('other_information_modal_textarea')->nullable();
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
        Schema::dropIfExists('other_information');
    }
}
