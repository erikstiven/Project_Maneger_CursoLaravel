<?php

namespace App\Http\Controllers;

use App\Models\Project; //llamado al modelo que será el representante de los proyectos en este controlador

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Obtener todos los registros de la tabla projects
    public function getAllProjects()
    {
        $projects = Project::all();
        return $projects;
    }
    //función que muestre los últimos diez registros de la tabla projects
    public function getTenProjects()
    {
        $projects = Project::take(10)->get();
        return $projects;
    }
    //agregar los proyectos de la tabla projects
    public function insertProject(Request $request)
    {
        $validatedData = $request->validate([
            'city_id' => 'required|integer',
            'company_id' => 'required|integer',
            'user_id' => 'required|integer',
            'name' => 'required|string|max:30',
            'execution_date' => 'required|date',
            'is_active' => 'required|boolean',
        ]);

        $project = Project::create($validatedData);

        return response()->json(['message' => 'Project created successfully', 'project' => $project], 201);
    }    
}
