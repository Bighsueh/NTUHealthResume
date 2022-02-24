<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_replies', function (Blueprint $table) {
            $table->id('doctor_replies_id')->autoIncrement();
            $table->string('doctor_replies_employee_id');
            $table->string('doctor_replies_medicine_description');
            $table->string('doctor_replies_pharmacist_reply');
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
        Schema::dropIfExists('doctor_replies');
    }
}
