<?php

namespace Database\Factories;

use App\Models\NivelEstante;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductoNivelEstante>
 */
class ProductoNivelEstanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'cantidad' => $this->faker->numberBetween(0, 100),
            'producto_id' => Producto::factory(),
            'nivel_estante_id' => NivelEstante::factory(),
        ];
    }
}
