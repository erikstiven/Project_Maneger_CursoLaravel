<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        //'created_at',
        //'updated_at',
    ];
    public $timestamps = false; // Desactivar marcas de tiempo

    //insertar 10 datos al azar
    public function insertUsers()
    {
        User::factory(10)->create();
        return "Usuarios insertados correctamente.";
    }
}
