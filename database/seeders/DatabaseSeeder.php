<?php

namespace Database\Seeders;

use App\Models\Categorias;
use App\Models\Productos;
use App\Models\Sucursales;
use App\Models\Usuarios;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Usuarios::factory()->create([
            'name' => 'alain',
            'apellido_paterno' => 'lemus',
            'apellido_materno' => 'muñoz',
            'fecha_nacimiento' => '1990/10/06',
            'sexo' => 'Masculino',
            'email' => 'alainttlm@gmail.com',
            'password' => Hash::make("admin")
        ]);

        Sucursales::factory()->create([
            'nombre' => 'Sucursal 1',
            'activo' => true,
            'horario_apertura' => '09:00:00',
            'horario_cierre' => '20:00:00'
        ]);

        Sucursales::factory()->create([
            'nombre' => 'Sucursal 2',
            'activo' => true,
            'horario_apertura' => '11:00:00',
            'horario_cierre' => '20:00:00'
        ]);

        Sucursales::factory()->create([
            'nombre' => 'Sucursal 3',
            'activo' => true,
            'horario_apertura' => '14:00:00',
            'horario_cierre' => '20:00:00'
        ]);

        Categorias::factory()->count(15)->create();
        Productos::factory()->count(50)->create();
    }
}
