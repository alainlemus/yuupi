<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'activo',
        'inventario',
        'codigo_de_barras',
        'descripcion',
        'precio',
        'imagen',
        'sucursal_id',
        'categoria_id'
    ];

    protected $casts = [
        'imagen' => 'array'
    ];

    public function sucursal(): BelongsTo{
        return $this->belongsTo(Sucursales::class, 'sucursal_id');
    }

    public function categoria(): BelongsTo{
        return $this->belongsTo(Categorias::class, 'categoria_id');
    }
}
