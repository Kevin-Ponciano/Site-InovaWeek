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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();

            // Criar chave estrangeira para paciente
            $table->string('title')->nullable(); //title = Status
            $table->string('patient')->nullable();// Configurar relacionamento one to on
            $table->string('observation')->nullable();

            $table->dateTime('start');
            $table->dateTime('end');

            $table->string('color')->nullable();
            $table->string('display')->nullable();
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
        Schema::dropIfExists('consultations');
    }
};
