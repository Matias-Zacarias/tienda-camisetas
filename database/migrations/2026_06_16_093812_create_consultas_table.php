<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();

            // Datos del formulario
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->text('mensaje');

            // Estados
            $table->boolean('leida')->default(false);
            $table->boolean('respondida')->default(false);

            // Relación opcional con usuario registrado
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};