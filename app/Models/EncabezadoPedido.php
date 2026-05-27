<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EncabezadoPedido extends Model
{
    use HasFactory;

    protected $table = 'encabezados_pedidos';

    protected $fillable = [
        'user_id',
        'cliente_telefono',
        'direccion_envio',
        'metodo_pago',
        'estado',
        'subtotal',
        'total',
        'observaciones',
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    // RELACIONES

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function detalles(): HasMany
    {
        return $this->hasMany(DetallePedido::class, 'pedido_id');
    }
}