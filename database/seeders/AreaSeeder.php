<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'name' => 'Comunicación y expresión',
            'slug' => 'comunicacion-y-expresion'
        ]);
        Area::create([
            'name' => 'Especialidad',
            'slug' => 'especialidad'
        ]);
        Area::create([
            'name' => 'Exactas',
            'slug' => 'exactas'
        ]);
        Area::create([
            'name' => 'Sociales',
            'slug' => 'sociales'
        ]);
        Area::create([
            'name' => 'Taller y tecnología',
            'slug' => 'taller-y-tecnologia'
        ]);
    }
}
