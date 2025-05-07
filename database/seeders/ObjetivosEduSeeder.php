<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ObjetivosEducacionales;

class ObjetivosEduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ObjetivosEducacionales::create([
            'descripcion' => 'El egresado se incorpora en actividades de actualización disciplinar como: estudios de posgrado, especializaciones y diplomados.',
            'criterio' => 'El egresado reconoce la necesidad de actualizarse para asimilar los cambios y avances de la profesión.',
            'indicador' => '5% de egresados se actualiza adaptándose a los cambios y avances de su perfil de profesión.'
        ]);

        ObjetivosEducacionales::create([
            'descripcion' => 'El egresado es capaz de diseñar, desarrollar, mantener e implementar tecnologías de la información para dar soluciones tecnológicas a las empresas.',
            'criterio' => 'El egresado diseñara, desarrollara, mantendrá e implementara tecnologías de la información para dar soluciones tecnológicas a las empresas.',
            'indicador' => '15 % de los egresados están enfocados en el diseño, desarrollo, mantenimiento o implementación de TI, ofreciendo soluciones a las empresas.',
        ]);

        ObjetivosEducacionales::create([
            'descripcion' => 'El egresado es capaz de desarrollar e implementar soluciones web utilizando tecnologías de vanguardia.',
            'criterio' => 'El egresado desarrollara soluciones web con tecnología de vanguardia',
            'indicador' => '15 % de los egresados está enfocado al desarrollo e implementación de sitios web',
        ]);

        ObjetivosEducacionales::create([
            'descripcion' => 'El egresado es líder de proyectos de sistemas de información y servicios de tecnologías de información y comunicaciones, en equipos de trabajo.',
            'criterio' => 'Los egresados serán líderes de proyectos tecnológicos formando equipos de trabajo.',
            'indicador' => '5 % de los egresados se encuentran liderando o dirigiendo equipos de trabajo en proyectos de implementación de tecnologías de la información.',
        ]);

        ObjetivosEducacionales::create([
            'descripcion' => 'El egresado se conduce con ética y responsabilidad que contribuyen al desarrollo y mejoramiento de su actividad profesional.',
            'criterio' => 'El egresado se conduce acorde a los lineamientos y la filosofía de la organización en la que se desempeña en la toma de decisiones a nivel gerencial.',
            'indicador' => '95 % de egresados se conducen con ética profesional su quehacer profesional.',
        ]);
    }
}
