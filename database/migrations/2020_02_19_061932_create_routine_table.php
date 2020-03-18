<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_routine', function (Blueprint $table) {
            $table->bigIncrements('routine_id');
            $table->integer('dept_id');
            $table->integer('semester_id');
            $table->integer('teacher_id');
            $table->integer('course_id');
            $table->integer('section_id');
            $table->integer('day_id');
            $table->integer('time_id');
            $table->integer('room_id');
             $table->string('year');
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
        Schema::dropIfExists('tbl_routine');
    }
}
