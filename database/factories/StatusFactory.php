<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'status' => $this->faker->unique()->randomElement([
                'Pendiente',
                'Evaluación',
                'En Proceso',
                'Finalizada',
                'Rechazada',
                'Anulada',
                'Cerrada'
            ]
    )
        ];
    }
}
