<?php

namespace Database\Factories;
use App\Models\Company;//agrego esta linea

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company, // Utiliza el método faker->company para generar nombres de compañías más cortos
            // Agrega más columnas según sea necesario
        ];
    }
}
