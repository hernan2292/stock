<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'dependencia_id',
    ];

    // Relación con la dependencia a la que pertenece el permiso
    public function dependencia()
    {
        return $this->belongsTo(Dependencia::class);
    }
}