<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'project_id';

    protected $fillable = [
        'city_id',
        'company_id',
        'user_id',
        'name',
        'execution_date',
        'is_active',
        //'created_at',
        //'updated_at',
    ];
    public $timestamps = false; // Desactivar marcas de tiempo

    //insertar 10 datos al azar
    public function insertProjects()
    {
        $cities = City::all();
        $companies = Company::all();
        $users = User::all();

        if ($cities->count() > 0 && $companies->count() > 0 && $users->count() > 0) {
            Project::factory(10)->create([
                'city_id' => $this->faker->randomElement($cities)->id,
                'company_id' => $this->faker->randomElement($companies)->id,
                'user_id' => $this->faker->randomElement($users)->id,
            ]);
            return "Proyectos insertados correctamente.";
        } else {
            return "No hay suficientes ciudades, empresas o usuarios disponibles para asociar proyectos.";
        }
    }

    //Relaciones
    //Relación con la ciudad asociada al proyecto-Un proyecto pertenece a una ciudad específica.

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    //Relación con la empresa asociada al proyecto-Un proyecto pertenece a una empresa específica.

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    //Relación con el usuario asociado al proyecto-Un proyecto pertenece a un usuario específico.

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
