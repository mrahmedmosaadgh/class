<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksschoolinfosTable extends Migration
{
    /**
     * Run the migrations.
     *database\migrations\2022_06_13_113849_create_marksschoolinfo_table.php
     * @return void
     */
    public function up()
    {
        Schema::create('marksschoolinfos', function (Blueprint $table) {
            $table->id();
            $table->string('name1')->nullable();
            $table->string('name2')->nullable();
            $table->string('name3')->nullable();
            $table->string('name4')->nullable();

            $table->string('year')->nullable();
            $table->string('devs')->nullable();
            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->string('notes4')->nullable();
            $table->string('notes5')->nullable();
            $table->string('notes6')->nullable();
            $table->string('notes7')->nullable();
            $table->string('notes8')->nullable();
            $table->string('notes9')->nullable();
            $table->string('notes10')->nullable();
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
        Schema::dropIfExists('marksschoolinfos');
    }
}
