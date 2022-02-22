<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicationRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medication_records', function (Blueprint $table) {
            $table->id('record_id');
            $table->integer('patient_id');
            $table->time('date_of_examination');
            $table->integer('medical_history_no');
            $table->string('insurance_type');
            $table->time('redate');
            $table->string('pres_hosp');
            $table->string('disp_hosp');
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
        Schema::dropIfExists('medication_records');
    }
}
