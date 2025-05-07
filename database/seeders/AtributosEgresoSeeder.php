<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AtributosEgreso;

class AtributosEgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AtributosEgreso::create([
            'atributo' => 'Identificar, formular y resolver problemas de ingeniería aplicando los principios de ingeniería, ciencias y matemáticas en campo de tecnologías de la información y comunicación.',
        ]);

        AtributosEgreso::create([
            'atributo' => 'Analizar, Diseñar, Desarrollar e Implementar sistemas de información para control y toma de decisiones, en diferentes plataformas, garantizando los estándares de calidad y seguridad.',
        ]);

        AtributosEgreso::create([
            'atributo' => 'Integrar diferentes arquitecturas de hardware y administrar plataformas de software para incrementar la productividad en las organizaciones.',
        ]);
        AtributosEgreso::create([
            'atributo' => 'Desempeñar funciones de consultoría y auditoría en el campo de las Tecnologías de la Información y Comunicaciones (TIC), comunicándose efectivamente con diferentes audiencias.',
        ]);
        AtributosEgreso::create([
            'atributo' => 'Implementar sistemas de seguridad bajo políticas internas de las organizaciones y estándares aceptados, tomando en cuenta los aspectos legales y de explotación de las tecnologías de la información y comunicación.',
        ]);
        AtributosEgreso::create([
            'atributo' => 'Diseñar Interacciones Humano-Computadora que permitan adaptarse a las circunstancias cambiantes del ámbito profesional cumpliendo normas de accesibilidad, usabilidad y seguridad.',
        ]);
        AtributosEgreso::create([
            'atributo' => 'Establecer alianzas estratégicas para emprender en el ámbito de las Tecnologías de Información y Comunicaciones, utilizando las tecnologías y herramientas actuales y emergentes.',
        ]);
    }
}
