<?php

namespace App\Http\Controllers;

use App\Models\City; //llamado al modelo que será el representante de los proyectos en este controlador

use Illuminate\Http\Request;

class CityController extends Controller
{
    //insertar 10 datos al azar
    public function genereCities()
    {
        City::factory(10)->create();
        return "Ciudades insertadas correctamente.";
    }
    // Obtener todos los registros de la tabla cities
    public function getAllCities()
    {
        $cities = City::all();
        return $cities;
    }
    // Mostrar detalles de una ciudad
    public function getCity($id)
    {
        $city = City::findOrFail($id);
        return $city;
    }

    // Almacenar una nueva ciudad en la base de datos
    public function insertCity(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            // Agrega más validaciones según sea necesario
        ]);

        $city = City::create($validatedData);

        return response()->json(['message' => 'City created successfully', 'city' => $city], 201);
    }

    // Actualizar una ciudad en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Otras reglas de validación según tus necesidades
        ]);

        $city = City::findOrFail($id);
        $city->update($request->all());

        return response()->json(['message' => 'City updated successfully', 'city' => $city], 200);
    }

    // Borrar una ciudad de la base de datos
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return response()->json(['message' => 'City deleted successfully'], 200);
    }
}
