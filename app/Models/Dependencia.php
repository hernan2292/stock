<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'dependencia_id',
    ];

    // Relación recursiva con sí misma para representar la jerarquía de dependencias
    public function dependencia()
    {
        return $this->belongsTo(Dependencia::class);
    }

    // Relación con los permisos relacionados a la dependencia
    public function permisos()
    {
        return $this->hasMany(Permiso::class);
    }
}