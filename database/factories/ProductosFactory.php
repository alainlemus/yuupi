<?php

namespace Database\Factories;

use App\Models\Categorias;
use App\Models\Sucursales;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'activo' => fake()->boolean(),
            'inventario' => fake()->numberBetween(0,100),
            'codigo_de_barras' => fake()->numerify('############'),
            'descripcion' => fake()->text(),
            'sucursal_id' => Sucursales::inRandomOrder()->first()->id,
            'categoria_id' => Categorias::inRandomOrder()->first()->id,
        ];
    }
}
