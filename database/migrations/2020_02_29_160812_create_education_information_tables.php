<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationInformationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_information_tables', function (Blueprint $table) {
            $table->increments('user_id');
            $table->char('board_university');
            $table->char('class_name');
            $table->string('university_collage_name');
            $table->text('subject');
            $table->char('passing_year');
            $table->char('mark_obtain');
            $table->char('mark_total');
            $table->float('percentage_mark');
            $table->char('board_university1');
            $table->char('class_name1');
            $table->string('university_collage_name1');
            $table->text('subject1');
            $table->char('passing_year1');
            $table->char('mark_obtain1');
            $table->char('mark_total1');
            $table->float('percentage_mark1');
            $table->char('board_university2');
            $table->char('class_name2');
            $table->string('university_collage_name2');
            $table->text('subject2');
            $table->char('passing_year2');
            $table->char('mark_obtain2');
            $table->char('mark_total2');
            $table->float('percentage_mark2');
            $table->char('board_university3');
            $table->char('class_name3');
            $table->string('university_collage_name3');
            $table->text('subject3');
            $table->char('passing_year3');
            $table->char('mark_obtain3');
            $table->char('mark_total3');
            $table->float('percentage_mark3');
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
        Schema::dropIfExists('education_information_tables');
    }
}
