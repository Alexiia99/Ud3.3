<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function alumnos()  // Conecto con Alumnos la relacion N a N usando la tabla Nota de pivote
    {
        return $this->belongsToMany(Alumno::class, 'notas')
                    ->withPivot('nota')
                    ->withTimestamps();
    }
}
