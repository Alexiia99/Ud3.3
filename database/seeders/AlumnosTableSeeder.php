<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlumnosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('alumnos')->insert([
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@ejemplo.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'María García',
                'email' => 'maria.garcia@ejemplo.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Pedro Rodríguez',
                'email' => 'pedro.rodriguez@ejemplo.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}