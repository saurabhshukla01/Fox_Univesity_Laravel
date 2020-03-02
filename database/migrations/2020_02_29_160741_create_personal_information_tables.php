<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information_tables', function (Blueprint $table) {
            $table->Increments('user_id');
            $table->mediumText('address_line1');
            $table->mediumText('address_line2');
            $table->char('state');
            $table->char('country');
            $table->char('city');
            $table->char('pincode');
            $table->char('addhar_number');
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
        Schema::dropIfExists('personal_information_tables');
    }
}
