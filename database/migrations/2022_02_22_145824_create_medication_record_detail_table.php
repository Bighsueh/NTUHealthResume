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
            $table->id('detail_id');
            $table->integer('record_id');
            $table->string('indication');
            $table->string('category');
            $table->string('trade_name');
            $table->string('generic_name');
            $table->float('dose');
            $table->string('routes');
            $table->string('freq');
            $table->float('pres_day');
            $table->float('total_amount');
            $table->string('note');
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
