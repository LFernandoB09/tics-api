<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JefeCarrera;

class JefeCarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JefeCarrera::create([
            'nombre' => 'Armando López Hernández',
            'telefono' => '7861549000',
            'correo' => 'tics@cdhidalgo.tecnm.mx',
            'posicion' => 'Jefe de División de Ingeniería en Tecnologías de la Información y Comunicación',
            'ubicacion' => 'Edificio “A” planta alta.'
        ]);
    }
}
