<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'product_id',  // Asegúrate de usar el nombre correcto del campo
        'quantity',
    ];

    // Relación con el modelo Producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'product_id');
    }

    // Relación con el modelo Usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
