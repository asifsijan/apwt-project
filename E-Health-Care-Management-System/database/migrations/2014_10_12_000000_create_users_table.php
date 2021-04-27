<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD

            $table->id();

            $table->string('full_name');
            
            $table->string('user_name');
            
            $table->string('email');


            $table->increments('id');
           // $table->integer('adpm_id');
            $table->string('user_name')->unique();
            $table->string('user_type');

            $table->string('image');
            
            $table->string('password');

            $table->date('dob');

            $table->string('gender');

            $table->string('blood_type');

            $table->integer('nid');

            $table->integer('contact');
            
            $table->string('user_type');
            
=======
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
>>>>>>> saifullah
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
        Schema::dropIfExists('users');
    }
}
