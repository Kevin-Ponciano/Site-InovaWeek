<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspects', function (Blueprint $table) {
            $table->id();

            $table->string('name_suspect',64);
            $table->string('symptoms',256);
            $table->string('treatment',256);
            $table->string('differential_diagnosis',256);
            $table->string('exams',256);
            $table->string('provoked',256);
            $table->string('signals',256);

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
        Schema::dropIfExists('suspects');
    }
};
