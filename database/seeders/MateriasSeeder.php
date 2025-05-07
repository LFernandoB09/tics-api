<?php

namespace Database\Seeders;

use App\Models\Materias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materias::create([
            'clave' => 'ACF-0901',
            'nombre' => 'Cálculo Diferencial',
            'semestre' => '1',
        ]);

        Materias::create([
            'clave' => 'AEF-1032',
            'nombre' => 'Fundamentos de Programación',
            'semestre' => '1',
        ]);

        Materias::create([
            'clave' => 'TIF-1019',
            'nombre' => 'Matemáticas Discretas I',
            'semestre' => '1',
        ]);

        Materias::create([
            'clave' => 'TIP-1017',
            'nombre' => 'Introducción a las TICs',
            'semestre' => '1',
        ]);

        Materias::create([
            'clave' => 'ACA-0907',
            'nombre' => 'Taller de Ética',
            'semestre' => '1',
        ]);

        Materias::create([
            'clave' => 'ACC-0906',
            'nombre' => 'Fundamentos de Investigación',
            'semestre' => '1',
        ]);

        Materias::create([
            'clave' => 'ACF-0902',
            'nombre' => 'Cálculo Integral',
            'semestre' => '2',
        ]);

        Materias::create([
            'clave' => 'AEB-1054',
            'nombre' => 'Programación Orientada a Objetos',
            'semestre' => '2',
        ]);

        Materias::create([
            'clave' => 'TIF-1020',
            'nombre' => 'Matemáticas Discretas II',
            'semestre' => '2',
        ]);

        Materias::create([
            'clave' => 'TIF-1009',
            'nombre' => 'Contabilidad y Costos',
            'semestre' => '2',
        ]);

        Materias::create([
            'clave' => 'ACF-0903',
            'nombre' => 'Álgebra Lineal',
            'semestre' => '2',
        ]);

        Materias::create([
            'clave' => 'TIF-1021',
            'nombre' => 'Matemáticas para la Toma de Decisiones',
            'semestre' => '3',
        ]);

        Materias::create([
            'clave' => 'TID-1012',
            'nombre' => 'Estructura y Organización de Datos',
            'semestre' => '3',
        ]);

        Materias::create([
            'clave' => 'TIC-1002',
            'nombre' => 'Administración Gerencial',
            'semestre' => '3',
        ]);

        Materias::create([
            'clave' => 'AEF-1031',
            'nombre' => 'Fundamentod de Base de Datos',
            'semestre' => '3',
        ]);

        Materias::create([
            'clave' => 'TIC-1011',
            'nombre' => 'Electricidad y Magnetismo',
            'semestre' => '3',
        ]);

        Materias::create([
            'clave' => 'TIF-1013',
            'nombre' => 'Fundamentos de Redes',
            'semestre' => '4',
        ]);

        Materias::create([
            'clave' => 'TIB-1024',
            'nombre' => 'Programación II',
            'semestre' => '4',
        ]);

        Materias::create([
            'clave' => 'TIE-1018',
            'nombre' => 'Matemáticas Aplicadas a Comunicaciones',
            'semestre' => '4',
        ]);

        Materias::create([
            'clave' => 'AEA-1063',
            'nombre' => 'Taller de Base de Datos',
            'semestre' => '4',
        ]);

        Materias::create([
            'clave' => 'TID-1008',
            'nombre' => 'Circuitos Eléctricos y Electrónicos',
            'semestre' => '4',
        ]);

        Materias::create([
            'clave' => 'TIC-1014',
            'nombre' => 'Ingeniería de Software',
            'semestre' => '4',
        ]);

        Materias::create([
            'clave' => 'TIF-1025',
            'nombre' => 'Redes de Computadores',
            'semestre' => '5',
        ]);

        Materias::create([
            'clave' => 'TID-1004',
            'nombre' => 'Análisis de Señales y Sistemas de Comunicación',
            'semestre' => '5',
        ]);

        Materias::create([
            'clave' => 'TIF-1001',
            'nombre' => 'Administración de Proyectos',
            'semestre' => '5',
        ]);

        Materias::create([
            'clave' => 'TIF-1007',
            'nombre' => 'Base de Datos Distribuidas',
            'semestre' => '5',
        ]);

        Materias::create([
            'clave' => 'TIC-1005',
            'nombre' => 'Arquitectura de Computadoras',
            'semestre' => '5',
        ]);

        Materias::create([
            'clave' => 'TIC-1027',
            'nombre' => 'Taller de Ingeniería de Software',
            'semestre' => '5',
        ]);

        Materias::create([
            'clave' => 'TIF-1029',
            'nombre' => 'Telecomunicaciones',
            'semestre' => '6',
        ]);

        Materias::create([
            'clave' => 'TIC-1028',
            'nombre' => 'Tecnologías Inalámbricas',
            'semestre' => '6',
        ]);

        Materias::create([
            'clave' => 'AEB-1055',
            'nombre' => 'Programación Web',
            'semestre' => '6',
        ]);

        Materias::create([
            'clave' => 'ACD-0918',
            'nombre' => 'Desarrollo Sustentable',
            'semestre' => '6',
        ]);

        Materias::create([
            'clave' => 'TID-1010',
            'nombre' => 'Desarrollo de Emprendedores',
            'semestre' => '6',
        ]);

        Materias::create([
            'clave' => 'AEC-1061',
            'nombre' => 'Sistemas Operativos',
            'semestre' => '6',
        ]);

        Materias::create([
            'clave' => 'TIF-1026',
            'nombre' => 'Redes Emergentes',
            'semestre' => '7',
        ]);

        Materias::create([
            'clave' => 'AEB-1011',
            'nombre' => 'Desarrollo de Aplicaciones para Dispositivos Móviles',
            'semestre' => '7',
        ]);

        Materias::create([
            'clave' => 'ACA-0909',
            'nombre' => 'Taller de Investigación',
            'semestre' => '7',
        ]);

        Materias::create([
            'clave' => 'TIH-1016',
            'nombre' => 'Interacción Humano-Computadora',
            'semestre' => '7',
        ]);

        Materias::create([
            'clave' => 'TIC-1022',
            'nombre' => 'Negocios Electrónicos I',
            'semestre' => '7',
        ]);

        Materias::create([
            'clave' => 'AED-1062',
            'nombre' => 'Sistemas Operativos II',
            'semestre' => '7',
        ]);

        Materias::create([
            'clave' => 'TIB-1003',
            'nombre' => 'Administración y Seguridad de Redes',
            'semestre' => '8',
        ]);

        Materias::create([
            'clave' => 'TIC-1006',
            'nombre' => 'Auditoría en Tecnologías de la Información',
            'semestre' => '8',
        ]);

        Materias::create([
            'clave' => 'ACA-0910',
            'nombre' => 'Taller de Investigación II',
            'semestre' => '8',
        ]);

        Materias::create([
            'clave' => 'TIC-1015',
            'nombre' => 'Ingeniería del Conocimiento',
            'semestre' => '8',
        ]);

        Materias::create([
            'clave' => 'TIC-1023',
            'nombre' => 'Negocios Eletrónicos II',
            'semestre' => '8',
        ]);

        Materias::create([
            'clave' => 'TWB-2001',
            'nombre' => 'Diseño Multimedia',
            'semestre' => '8',
        ]);

        Materias::create([
            'clave' => 'TWD-2002',
            'nombre' => 'Administración de Servidores',
            'semestre' => '9',
        ]);

        Materias::create([
            'clave' => 'TWD-2003',
            'nombre' => 'Administración Estratégica de TI',
            'semestre' => '9',
        ]);

        Materias::create([
            'clave' => 'TWD-2004',
            'nombre' => 'Hacking Ético',
            'semestre' => '9',
        ]);

        Materias::create([
            'clave' => 'TWD-2005',
            'nombre' => 'Tecnologías Web FrontEnd',
            'semestre' => '9',
        ]);

        Materias::create([
            'clave' => 'R-10',
            'nombre' => 'Residencias Profesionales',
            'semestre' => '10',
        ]);
    }
}
