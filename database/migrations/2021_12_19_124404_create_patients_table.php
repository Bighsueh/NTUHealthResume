<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patient_id');
            $table->string('patient_no');
            $table->string('close_date');
            $table->string('place');
            $table->string('id_number');
            $table->string('patient_name');
            $table->string('patient_bd');
            $table->string('age');
            $table->string('weight');
            $table->string('height');
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
        Schema::dropIfExists('patients');
    }
}
