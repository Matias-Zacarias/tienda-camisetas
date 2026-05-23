<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EncabezadoPedido extends Model
{
    use HasFactory;

    protected $table = 'encabezados_pedidos';

    protected $fillable = [
        'cliente_nombre',
        'cliente_email',
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

    public function detalles()
    {
        return $this->hasMany(DetallePedido::class, 'pedido_id');
    }
}