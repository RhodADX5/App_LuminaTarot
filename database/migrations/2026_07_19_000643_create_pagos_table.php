<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id(); // id - PK
            
            // id_u: Llave foránea que conecta al usuario que realiza la transacción
            $table->foreignId('id_u')->constrained('users')->onDelete('cascade');
            
            $table->date('fecha'); // Fecha del pago
            $table->time('hora');  // Hora del pago
            $table->string('folio')->unique(); // Folio único del comprobante o pasarela en línea
            $table->decimal('cant', 8, 2); // Monto del dinero de la transacción
            
            // activo: 1 para vigente, 0 para vencido (el script validará las fechas para cambiarlo a 0)
            $table->boolean('activo')->default(1); 
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};