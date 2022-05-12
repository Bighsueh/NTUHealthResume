<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicationRecordDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medication_record_detail', function (Blueprint $table) {
            $table->id('detail_id')->autoIncrement();
            $table->integer('record_id');
            $table->string('trade_name')->nullable();
            $table->string('generic_name')->nullable();
            $table->string('dose')->nullable();
            $table->string('dose_per_unit')->nullable();
            $table->string('daily_dose')->nullable();
            $table->string('freq')->nullable();
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
        Schema::dropIfExists('medication_record_detail');
    }
}
