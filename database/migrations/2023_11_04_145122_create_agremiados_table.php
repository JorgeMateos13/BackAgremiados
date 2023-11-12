<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agremiados', function (Blueprint $table) {
            $table->id('id_agremiado');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->string('nombre');
            $table->string('sexo');
            $table->integer('NUP');
            $table->string('RFC');
            $table->integer('NSS');
            $table->string('f_nacimiento');
            $table->integer('telefono');
            $table->string('cuota');
            $table->unsignedBigInteger('NUE')->nullable();

            $table->foreign('NUE')->references('id_usuario')->on('usuarios')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agremiados');
    }
};
