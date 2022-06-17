<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger ('school_id')->nullable();
            $table->string('day')                   ->nullable();
            $table->string('period')                ->nullable();
            $table->string('class_name')            ->nullable();
            $table->string('teacher_id')            ->nullable();
            $table->string('subject')               ->nullable();
            $table->string('color')                 ->nullable();           
            $table->boolean('active')               ->default(1);
            $table->string('notes')                 ->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
