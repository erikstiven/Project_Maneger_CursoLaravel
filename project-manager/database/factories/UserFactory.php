<?php

namespace Database\Factories;
use App\Models\User;//agrego esta linea

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            // Agrega más columnas según sea necesario
        ];
    }
}
