<?php

namespace Database\Seeders;

use App\Models\Company; //agrego esta linea
use App\Models\City; //agrego esta linea


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run()
    {
        $cities = City::all();

        if ($cities->count() > 0) {
            foreach (range(1, 10) as $index) {
                Company::factory()->create([
                    'city_id' => Company::factory()->create()->id,
                ]);
            }
        } else {
            echo "No hay ciudades disponibles para asociar empresas.";
        }
    }
}

