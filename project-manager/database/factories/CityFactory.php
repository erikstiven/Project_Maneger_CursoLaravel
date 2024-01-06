<?php

namespace Database\Factories;
use App\Models\City;//agrego esta linea

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    protected $model = City::class;

    public function definition()
    {
        return [
            'name' => $this->faker->city,
            // Puedes agregar más columnas según sea necesario
        ];
    }
}
