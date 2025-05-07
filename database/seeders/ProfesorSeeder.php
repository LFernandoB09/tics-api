<?php

namespace Database\Seeders;

use App\Models\Profesores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Profesores::create([
            'nombre' => 'María Elena Gutiérrez Ruiz',
            'areasInteres' => 'Diseño y administración de bases de datos',
            'materiasImpartidas' => [
                'Matematicas Discretas',
                'Fundamentos de Base de Datos',
                'Taller de Base de Datos']
        ]);

        Profesores::create([
            'nombre' => 'Alejandro Guzmán Luna',
            'areasInteres' => 'Desarrollo web y móvil y sistemas distribuidos',
            'materiasImpartidas' => [
                'Introducción a las TICs',
                'Tecnologías Inalámbricas',
                'Sistemas Operativos I & II',
                'Desarrollo de Aplicaciones para Dispositivos Móviles'
            ]
        ]);

        Profesores::create([
            'nombre' => 'Zinthia Moreno Ruiz',
            'areasInteres' => 'Administración de proyectos, ingeniería de software y proyectos de investigación',
            'materiasImpartidas' => [
                'Ingeniería de software',
                'Administración de proyectos',
                'Ingeniería del conocimiento',
                'Desarrollo de emprendedores'
                ]
        ]);

        Profesores::create([
            'nombre' => 'Emma Yesenia Rivera Ruiz',
            'areasInteres' => 'Ingeniería de software y diseño de experiencia de usuario',
            'materiasImpartidas' => [
                'Taller de Ingeniería de Software',
                'Interacción Humano Computadora',
                'Diseño Digital y Multimedia'
            ]
        ]);

        Profesores::create([
            'nombre' => 'Miguel Ángel Ruiz Martínez',
            'areasInteres' => 'Programación, IOT y creación de videojuegos',
            'materiasImpartidas' => [
                'Fundamentos de programación',
                'Programación orientada a objetos',
                'Auditoria de TI',
                'Hacking ético'
            ]
        ]);
    }
}
