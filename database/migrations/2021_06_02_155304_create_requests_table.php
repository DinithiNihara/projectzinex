<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); 
            $table->string('name');
            $table->string('email'); 
            $table->string('contact');
            $table->string('p_location'); 
            $table->string('r_location');
            $table->string('service');
            $table->string('vehicle'); 
            $table->string('passengers');
            $table->date('p_date');
            $table->time('p_time');
            $table->date('r_date'); 
            $table->time('r_time');
            $table->string('message');
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
        Schema::dropIfExists('requests');
    }
}
