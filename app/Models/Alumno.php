<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre', 'email'];

    public function asignaturas()        // Añado la relación N a N con asignaturas usando de pivote la tabla nota
    {
        return $this->belongsToMany(Asignatura::class, 'notas')
                    ->withPivot('nota')
                    ->withTimestamps();
    }

    public function perfil(): HasOne   // Añado la relacion 1 a 1 con perfil
    {
        return $this->hasOne(Perfil::class);
    }

    public function posts(): HasMany  // Añado la relación mostrando que un alumno puede tener N posts
    {
        return $this->hasMany(Post::class);
    }

}
