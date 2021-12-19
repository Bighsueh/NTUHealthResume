<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatitentRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patitent_replies', function (Blueprint $table) {
            $table->id('patitent_replies_id');
            $table->string('patitent_replies_patitent_id');
            $table->text('patitent_replies_text');
            $table->string('patitent_replies_title');
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
        Schema::dropIfExists('patitent_replies');
    }
}
