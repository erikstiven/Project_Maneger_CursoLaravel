<?php

namespace Database\Seeders;
use App\Models\Project;//agrego esta linea
use App\Models\City;//agrego esta linea
use App\Models\Company;//agrego esta linea
use App\Models\User;//agrego esta linea



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        //Usar la factoría para crear 10 proyectos
        Project::factory(10)->create();    
    }
    
}
