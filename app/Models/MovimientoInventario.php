<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovimientoInventario extends Model
{
    protected $fillable = [
        'fecha',
        'descripcion',
        'producto_id',
        'dependencia_id',
    ];

    // Relación con el producto asociado al movimiento
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    // Relación con la dependencia asociada al movimiento
    public function dependencia()
    {
        return $this->belongsTo(Dependencia::class);
    }
}