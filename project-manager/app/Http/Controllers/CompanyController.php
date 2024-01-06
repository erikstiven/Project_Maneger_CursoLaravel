<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // Insertar 10 datos al azar
    public function generateCompanies()
    {
        Company::factory(10)->create();
        return "Empresas insertadas correctamente.";
    }

    // Obtener todos los registros de la tabla companies
    public function getAllCompanies()
    {
        $companies = Company::all();
        return $companies;
    }

    // Mostrar detalles de una empresa
    public function getCompany($id)
    {
        $company = Company::findOrFail($id);
        return $company;
    }

    // Almacenar una nueva empresa en la base de datos
    public function insertCompany(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            // Agrega más validaciones según sea necesario
        ]);

        $company = Company::create($validatedData);

        return response()->json(['message' => 'Company created successfully', 'company' => $company], 201);
    }

    // Actualizar una empresa en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Otras reglas de validación según tus necesidades
        ]);

        $company = Company::findOrFail($id);
        $company->update($request->all());

        return response()->json(['message' => 'Company updated successfully', 'company' => $company], 200);
    }

    // Borrar una empresa de la base de datos
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return response()->json(['message' => 'Company deleted successfully'], 200);
    }
}
