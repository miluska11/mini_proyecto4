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
    Schema::create('asistencias', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('alumno_id');
        $table->unsignedBigInteger('curso_id');
        $table->date('fecha');
        $table->enum('estado', ['A', 'T', 'F']); 
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
        Schema::dropIfExists('asistencias');
    }
};
