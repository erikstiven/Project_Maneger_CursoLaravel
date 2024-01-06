<?php

namespace Database\Seeders;
use App\Models\City;//agrego esta linea

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run()
    {
        City::factory(10)->create();
    }
}
