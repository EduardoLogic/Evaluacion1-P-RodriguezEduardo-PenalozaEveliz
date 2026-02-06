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
    Schema::create('vehiculos', function (Blueprint $table) {
        $table->id();
        $table->string('placa');           // Atributo 1: string
        $table->integer('modelo');          // Atributo 2: integer
        $table->decimal('precio_venta', 10, 2); // Atributo 3: decimal
        $table->boolean('usado');          // Atributo 4: boolean
        $table->timestamps();
    });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
