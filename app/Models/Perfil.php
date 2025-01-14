<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perfil extends Model
{
    protected $fillable = ['alumno_id', 'biografia'];

    public function alumno(): BelongsTo   //Añado la relación con Alumno de 1 a 1
    {
        return $this->belongsTo(Alumno::class);
    }
}
