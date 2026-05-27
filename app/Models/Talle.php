<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Talle extends Model
{
    use HasFactory;

    protected $table = 'talle';

    protected $fillable = [
        'product_id',
        'name',
        'stock',
    ];

    protected $casts = [
        'stock' => 'integer',
    ];

    // RELACIONES

    public function product(): BelongsTo
    {
        return $this->belongsTo(
            Product::class,
            'product_id'
        );
    }

    public function detallesPedidos(): HasMany
    {
        return $this->hasMany(
            DetallePedido::class,
            'talle_id'
        );
    }
}