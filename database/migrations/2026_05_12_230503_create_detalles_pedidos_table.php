<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detalles_pedidos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pedido_id')
                ->constrained('encabezados_pedidos')
                ->onDelete('cascade');

            $table->foreignId('product_id')
                ->nullable()
                ->constrained('products')
                ->nullOnDelete();

            $table->string('producto_nombre');

            $table->decimal('precio_unitario', 10, 2);

            $table->integer('cantidad');

            $table->decimal('subtotal', 10, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detalles_pedidos');
    }
};