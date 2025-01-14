<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['alumno_id', 'titulo', 'contenido'];

    public function alumno(): BelongsTo    // Establezco la conexión mostrando que solo puede pertenecer a UN alumno
    {
        return $this->belongsTo(Alumno::class);
    }
}

