<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsParticipatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_participates', function (Blueprint $table) {
            $table->id();



            
            $table->unsignedBigInteger('school_id');       
            $table->unsignedBigInteger('participate_id');
            $table->unsignedBigInteger('student_id'); 
            $table->string('name'); 
            
            $table->string('day')->nullable();
            $table->string('week')->nullable();    
            $table->date('date');           


            $table->string('participate')->nullable();//full 20 5stars 
            $table->string('participateextra')->nullable();// star = 5 marks
            $table->string('score')->nullable();//participate+participateextra
            $table->string('participatedetails')->nullable();// 20,5,-5
            


             $table->string('notes')->nullable();//excellent v-good not good
             $table->string('notes2')->nullable();//excellent v-good not good
 
            
            // $table->string('participateid')->nullable();
            // $table->string('class_name')->nullable();
            // $table->string('teacher_id')->nullable();
            // $table->string('teacher')->nullable();
            // $table->string('subject')->nullable();
            
           
         
             
            
            
            // $table->integer('member_id')->unsigned();
 
            $table->foreign('school_id')->references('id')->on('users');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('participate_id')->references('id')->on('students_participate_ids');
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
        Schema::dropIfExists('students_participates');
    }
}
