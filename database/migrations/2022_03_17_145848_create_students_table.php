<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id')->nullable();       
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('student_idN')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('name')->nullable();
            $table->string('stage', 10)->nullable();
             $table->string('class', 10)->nullable();           
            $table->boolean('active')->default(1);
            $table->string('name_ar')->nullable();
            $table->string('namecut')->nullable();
            

            $table->string('notes')->nullable();
            
           
         
             
            
            
            // $table->integer('member_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users');
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
        Schema::dropIfExists('students');
    }
}
