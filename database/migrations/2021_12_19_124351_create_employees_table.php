<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('employees_name');
            $table->string('employees_account');
            $table->string('employees_password');
            $table->string('job_title');
            $table->string('departmant');
            $table->boolean('open_main_task');
            $table->boolean('add_doctor_reply');
            $table->boolean('add_pharmacist_reply');
            $table->boolean('close_main_task');
            $table->boolean('add_diet_log');
            $table->boolean('add_nutritionist');
            $table->boolean('manage_employee');
            $table->boolean('manage_patient');
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
        Schema::dropIfExists('employees');
    }
}
