<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorias extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'activo',
    ];

    public function productos(): HasMany{
        return $this->hasMany(Productos::class, 'producto_id');
    }

}
