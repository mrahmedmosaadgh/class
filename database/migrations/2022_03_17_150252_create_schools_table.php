<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id')->nullable();       

            $table->string('name')                 ->nullable();
            $table->string('subject')              ->nullable();
            $table->string('stages')               ->nullable();
             $table->string('classes')             ->nullable();           
             $table->boolean('active')->default(1);
             $table->string('name_ar')              ->nullable();
            $table->string('notes')                ->nullable();
            // $table->integer('member_id')->unsigned();
            // $table->foreign('student_id')->references('id')->on('users');
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
        Schema::dropIfExists('schools');
    }
}
