<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carrito_items', function (Blueprint $table) {

            $table->id();

            // Usuario
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // Producto
            $table->foreignId('product_id')
                ->nullable()
                ->constrained('products')
                ->nullOnDelete();

            // Talle
            $table->foreignId('talle_id')
                ->nullable()
                ->constrained('talle')
                ->nullOnDelete();

            // Cantidad
            $table->integer('cantidad')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito_items');
    }
};