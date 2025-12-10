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
        Schema::create('alumnos', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'nombre');
            $table->text(column: 'retroalimentación');
            $table->decimal(column: 'calificacion', total: 8, places: 2);
            $table->string(column: 'escuela');
            $table->string(column: 'email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
