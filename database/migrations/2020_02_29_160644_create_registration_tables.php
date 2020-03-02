<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_tables', function (Blueprint $table) {
            $table->increments('user_id');
            $table->char('candidate_name');
            $table->char('candidate_father_name');
            $table->char('gender');
            $table->char('category');
            $table->char('nationality');
            $table->date('Dob');
            $table->text('email');
            $table->char('mobile');
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
        Schema::dropIfExists('registration_tables');
    }
}
