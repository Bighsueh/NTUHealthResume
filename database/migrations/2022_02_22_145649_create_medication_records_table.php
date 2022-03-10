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
            $table->id('record_id')->autoIncrement();
            $table->date('date_of_examination')->nullable();
            $table->integer('medical_history_no')->nullable();
            $table->string('insurance_type')->nullable();
            $table->date('redate')->nullable();
            $table->string('pres_hosp')->nullable();
            $table->string('disp_hosp')->nullable();
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
