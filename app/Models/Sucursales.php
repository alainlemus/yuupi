<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sucursales extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'horario_apertura',
        'horario_cierre',

    ];

    public function productos(): HasMany {
        return $this->hasMany(Productos::class, 'producto_id');
    }
}
