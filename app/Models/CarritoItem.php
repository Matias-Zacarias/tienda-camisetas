<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarritoItem extends Model
{
    use HasFactory;

    protected $table = 'carrito_items';

    protected $fillable = [
        'product_id',
        'talle_id',
        'cantidad',
    ];

    protected $casts = [
        'cantidad' => 'integer',
    ];

    // RELACIONES

    public function product(): BelongsTo
    {
        return $this->belongsTo(
            Product::class,
            'product_id'
        );
    }

    public function talle(): BelongsTo
    {
        return $this->belongsTo(
            Talle::class,
            'talle_id'
        );
    }
}