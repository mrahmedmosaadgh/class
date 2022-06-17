<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodtimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodtimes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger ('school_id')->nullable();
            $table->string('period')                ->nullable();
            $table->string('stage')                 ->nullable();
            $table->time("start")                   ->nullable();
            $table->time("end")                     ->nullable();
            $table->string('Periodtime')            ->nullable();
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
        Schema::dropIfExists('periodtimes');
    }
}
