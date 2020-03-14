<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_tables', function (Blueprint $table) {
            $table->Increments('course_id');
            $table->char('course_name');
            $table->longtext('course_descripition');
            $table->char('course_duration');
            $table->char('course_seat');
            $table->text('course_image');
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
        Schema::dropIfExists('courses_tables');
    }
}
