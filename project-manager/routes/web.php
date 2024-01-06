<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController; // Agrega esta ruta del controlador
use App\Http\Controllers\CityController; // Agrega esta ruta del controlador
use App\Http\Controllers\CompanyController; // Agrega esta ruta del controlador
use App\Http\Controllers\UserController; // Agrega esta ruta del controlador



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*solicitamos por el método get un sitio que hemos llamado getAllProjects y 
referencia al archivo ProjectController, que tiene dentro una función llamada 
getAllProjects*/

//obtener todos los registros de la tabla projects
Route::get('/getAllProjects', [ProjectController::class, 'getAllProjects']);
//muestrar los últimos diez registros de la tabla projects
Route::get('/getLastTenProjects', [ProjectController::class, 'getTenProjects']);
//agregar los proyectos de la tabla projects
Route::post('/insertProject', [ProjectController::class, 'insertProject']);

//Rutas para City
Route::get('/genere-cities', [CityController::class, 'genereCities']);
Route::get('/cities', [CityController::class, 'getAllCities']);
Route::get('/cities/{id}', [CityController::class, 'getCity']);
Route::post('/create-cities', [CityController::class, 'insertCity']);
Route::put('/cities/{id}', [CityController::class, 'update']);
Route::delete('/cities/{id}', [CityController::class, 'destroy']);
// Rutas para Empresas
Route::get('/companies', [CompanyController::class, 'getAllCompanies']);
Route::get('/companies/{id}', [CompanyController::class, 'getCompany']);
Route::post('/companies', [CompanyController::class, 'insertCompany']);
Route::put('/companies/{id}', [CompanyController::class, 'update']);
Route::delete('/companies/{id}', [CompanyController::class, 'destroy']);
Route::get('/generate-companies', [CompanyController::class, 'generateCompanies']);