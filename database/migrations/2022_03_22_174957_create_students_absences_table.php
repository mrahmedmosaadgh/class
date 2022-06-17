<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *SELECT `id`, `absence_report_id`, `student_id`, `student_idN`, `class_name`,
      *  `subject`, `present`, `behavior`, `participation`, `classwork`, `homework`, `quiz`, `project`, `delay_minutes`, `active`, `mark`, `mark_extra`, `level`, `level_percent`, `notes`, `lastaccesstime`, `cansolve`, `canregattend`, 
      *`created_at`, `updated_at` FROM `student_absences` WHERE 1;
     * @return void
     */
    public function up()
    {
        Schema::create('students_absences', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('school_id')->nullable();       

            $table->string('class_name')->nullable();
            $table->string('period')->nullable();
            $table->string('day')->nullable();
            $table->string('teacher')->nullable();
            $table->string('subject')->nullable();
            $table->string('present')->nullable();
            $table->string('absent')->nullable();
            $table->string('stage', 10)->nullable();
             $table->date('date');           
 
            

            $table->string('notes')->nullable();
            
           
         
             
            
            
            // $table->integer('member_id')->unsigned();
 
            $table->foreign('school_id')->references('id')->on('users');
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
        Schema::dropIfExists('students_absences');
    }
}
