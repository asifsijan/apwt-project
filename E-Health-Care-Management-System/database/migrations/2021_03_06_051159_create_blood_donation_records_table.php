<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDonationRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_donation_records', function (Blueprint $table) {
            $table->increments('blood_donation_id');
            $table->string('appointment_time');
            $table->integer('m_s_p_s_id');
            $table->integer('patient_id');
            $table->string('blood_group');
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
        Schema::dropIfExists('blood_donation_records');
    }
}
