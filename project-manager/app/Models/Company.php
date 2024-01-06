<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey = 'company_id';

    protected $fillable = [
        'name',
        //'created_at',
        //'updated_at',
    ];
    public $timestamps = false; // Desactivar marcas de tiempo

    //insertar 10 datos al azar
    public function insertCompanies()
    {
        $cities = City::all();

        if ($cities->count() > 0) {
            Company::factory(10)->create([
                'city_id' => $this->faker->randomElement($cities)->id,
            ]);
            return "Empresas insertadas correctamente.";
        } else {
            return "No hay ciudades disponibles para asociar empresas.";
        }
    }
}
