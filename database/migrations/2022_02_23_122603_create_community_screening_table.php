<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityScreeningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_screening', function (Blueprint $table) {
            $table->id('community_screening_id');
            $table->string('patient_no');
            $table->string('screen_date');
            $table->string('diagnosis');
            $table->string('surgery');
            $table->string('hb');
            $table->string('alb');
            $table->string('ast');
            $table->string('cre');
            $table->string('ccr');
            $table->string('sugar');
            $table->string('tcho');
            $table->string('ldl');
            $table->string('us');
            $table->string('fall');
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
        Schema::dropIfExists('community_screening');
    }
}
