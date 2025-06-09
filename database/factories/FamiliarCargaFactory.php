<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FamiliarCarga;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FamiliarCarga>
 */
class FamiliarCargaFactory extends Factory
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
         
            'carga_nombre'=>$this->faker->sentence(20),
           
        ];
    }
}
