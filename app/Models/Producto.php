<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'codigo',
    ];

    // Relación con los movimientos de inventario
    public function movimientos()
    {
        return $this->hasMany(MovimientoInventario::class);
    }
}

