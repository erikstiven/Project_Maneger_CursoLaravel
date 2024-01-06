<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $primaryKey = 'city_id';

    protected $fillable = [
        'name',
        //'created_at',
        //'updated_at',
    ];
    public $timestamps = false; // Desactivar marcas de tiempo


}
