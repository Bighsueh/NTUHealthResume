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
            $table->string('indication')->nullable();
            $table->string('category')->nullable();
            $table->string('trade_name')->nullable();
            $table->string('generic_name');
            $table->float('dose');
            $table->string('routes')->nullable();
            $table->string('freq');
            $table->float('pres_day')->nullable();
            $table->float('total_amount')->nullable();
            $table->string('note')->nullable();
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
