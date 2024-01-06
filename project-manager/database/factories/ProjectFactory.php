<?php


namespace Database\Factories;
use App\Models\City;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Project; //agrego esta linea
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'city_id' => rand(1, 20),
            'company_id' => rand(1, 20),
            'user_id' => rand(1, 3),
            'name' => $this->faker->sentence,
            'execution_date' => $this->faker->date,
            'is_active' => $this->faker->boolean,
            // Otras columnas según sea necesario
        ];
    }
}
