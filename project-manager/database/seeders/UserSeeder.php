<?php

namespace Database\Seeders;
use App\Models\User;//agrege esta linea

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();
    }
}
