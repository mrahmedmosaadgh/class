<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsParticipateIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_participate_ids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id')->nullable();       
            $table->string('class_name')->nullable();
            $table->string('teacher_id')->nullable();
            $table->string('teacher')->nullable();
            $table->string('subject')->nullable();
            $table->string('period')->nullable();
            $table->string('day')->nullable();
            $table->string('week')->nullable();    
            $table->date('date'); 



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
        Schema::dropIfExists('students_participate_ids');
    }
}
