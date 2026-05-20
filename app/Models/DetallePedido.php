<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetallePedido extends Model
{
    use HasFactory;

    protected $table = 'detalles_pedidos';

    protected $fillable = [
        'pedido_id',
        'product_id',
        'producto_nombre',
        'precio_unitario',
        'cantidad',
        'subtotal',
    ];

    protected $casts = [
        'precio_unitario' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    public function pedido()
    {
        return $this->belongsTo(EncabezadoPedido::class, 'pedido_id');
    }

    public function producto()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}