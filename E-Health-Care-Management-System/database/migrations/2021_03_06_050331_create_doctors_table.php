<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            //$table->id();
            $table->increments('doctor_id');
            $table->integer('adpm_id')->unsigned();
            $table->foreign('adpm_id')->references('id')->on('users');
            $table->string('status');
            //$table->string('xyz');
            $table->string('about');
            $table->string('category');
            $table->string('degree');
            $table->integer('bmdc_id');
            $table->string('certificate');
            $table->integer('visit_fee');
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
        Schema::dropIfExists('doctors');
    }
}
