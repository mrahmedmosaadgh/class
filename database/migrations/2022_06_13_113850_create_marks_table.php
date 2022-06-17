<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marksschoolinfo_id');
            $table->unsignedBigInteger('marksschooldev_id');
            $table->string('name')->nullable();
            $table->string('sitnum')->nullable();
            $table->string('result')->nullable();
            $table->string('classroom')->nullable();


            $table->string('sub1')->nullable();
            $table->string('sub2')->nullable();
            $table->string('sub3')->nullable();
            $table->string('sub4')->nullable();
            $table->string('sub5')->nullable();
            $table->string('sub6')->nullable();
            $table->string('sub7')->nullable();
            $table->string('sub8')->nullable();
            $table->string('sub9')->nullable();
            $table->string('sub10')->nullable();
            $table->string('sub11')->nullable();
            $table->string('sub12')->nullable();
            $table->string('sub13')->nullable();
            $table->string('sub14')->nullable();
            $table->string('sub15')->nullable();
            $table->string('sub16')->nullable();
            $table->string('sub17')->nullable();
            $table->string('sub18')->nullable();
            $table->string('sub19')->nullable();
            $table->string('sub20')->nullable();
            $table->string('sub21')->nullable();
            $table->string('sub22')->nullable();
            $table->string('sub23')->nullable();
            $table->string('sub24')->nullable();
            $table->string('sub25')->nullable();
            $table->string('sub26')->nullable();
            $table->string('sub27')->nullable();
            $table->string('sub28')->nullable();
            $table->string('sub29')->nullable();
            $table->string('sub30')->nullable();
            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->string('notes4')->nullable();
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
        Schema::dropIfExists('marks');
    }
}
