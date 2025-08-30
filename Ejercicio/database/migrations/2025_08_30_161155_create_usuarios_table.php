<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('codigo')->primary();
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('sexo');  // <-- aquí agregamos sexo
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};