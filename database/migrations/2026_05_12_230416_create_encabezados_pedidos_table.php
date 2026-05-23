<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('encabezados_pedidos', function (Blueprint $table) {
            $table->id();

            $table->string('cliente_nombre');

            $table->string('cliente_email');

            $table->string('cliente_telefono')->nullable();

            $table->text('direccion_envio');

            $table->string('metodo_pago')->nullable();

            $table->string('estado')->default('pendiente');

            $table->decimal('subtotal', 10, 2);

            $table->decimal('total', 10, 2);

            $table->text('observaciones')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('encabezados_pedidos');
    }
};