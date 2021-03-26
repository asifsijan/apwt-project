<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_s_p_s', function (Blueprint $table) {
            $table->increments('m_s_p_s_id');
            $table->integer('adpm_id')->unsigned();
            $table->foreign('adpm_id')->references('id')->on('users');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_s_p_s');
    }
}
