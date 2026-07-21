<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id(); // id - PK
            
            // id_u: Llave foránea de usuarios (nullable por si hace la consulta libre inicial sin cuenta)
            $table->foreignId('id_u')->nullable()->constrained('users')->onDelete('cascade');
            
            // Las 3 preguntas que puede estructurar el usuario
            $table->text('p1')->nullable();
            $table->text('p2')->nullable();
            $table->text('p3')->nullable();
            
            // resp_gen: La interpretación holística unificada para las preguntas realizadas
            $table->text('resp_gen')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};