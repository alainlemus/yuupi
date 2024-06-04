<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Productos extends Model
{
    use HasFactory;

    public function Sucursales(): BelongsTo{
        return $this->belongsTo(Sucursales::class);
    }

    public function Categorias(): BelongsTo{
        return $this->belongsTo(Categorias::class);
    }
}
