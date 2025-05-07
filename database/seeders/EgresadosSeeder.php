<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Egresados;

class EgresadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Egresados::create([
            'nombre' => 'Luis Fernando Bautista Alcozer',
            'especialidad' => 'Tecnologías Web y Multimedia',
            'empresa' => 'epicore mx',
            'puesto' => 'Desarrollador Back-End',
            'correoContacto' => 'lfba6609@gmail.com'
        ]);

        Egresados::create([
            'nombre' => 'José Lino Miranda Oliver',
            'especialidad' => 'Tecnologías Web y Multimedia',
            'empresa' => 'epicore mx',
            'puesto' => 'Desarrollador Front-End',
            'correoContacto' => 'lmiranda@gmail.com'
        ]);

        Egresados::create([
            'nombre' => 'Humberto Diaz Nava',
            'especialidad' => 'Tecnologías Web y Multimedia',
            'empresa' => 'Control IT',
            'puesto' => 'Desarrollador Web',
            'correoContacto' => ''
        ]);

        Egresados::create([
            'nombre' => 'Luis Miguel Valencia Piña',
            'especialidad' => 'Tecnologías Web y Multimedia',
            'empresa' => 'ARPAN Analytics',
            'puesto' => 'Desarrollador Web',
            'correoContacto' => ''
        ]);

        Egresados::create([
            'nombre' => 'Diego Rivera González',
            'especialidad' => 'Tecnologías Web y Multimedia',
            'empresa' => 'Control IT',
            'puesto' => 'Desarrollador Web',
            'correoContacto' => ''
        ]);

        Egresados::create([
            'nombre' => 'Ricardo Guzmán Sánchez',
            'especialidad' => 'Tecnologías Web y Multimedia',
            'empresa' => 'Control IT',
            'puesto' => 'Desarrollador Web',
            'correoContacto' => ''
        ]);

        Egresados::create([
            'nombre' => 'Juan Karlo Tellez Navarrete',
            'especialidad' => 'Tecnologías Web y Multimedia',
            'empresa' => '-',
            'puesto' => 'Marketing Digital',
            'correoContacto' => ''
        ]);
    }
}
