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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id - PK
            $table->string('usuario')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('password'); // Requerido para el login
            
            // tipo_u: Controlará si está 'sin membresia', 'con membresia' (o 'admin', etc.)
            $table->string('tipo_u')->default('sin membresia'); 
            
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');   
    }
};
