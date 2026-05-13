<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni'      => $this->faker->unique()->regexify('[0-9]{8}[A-Z]'),
            'nom'      => $this->faker->firstName(),
            'cognom1'  => $this->faker->lastName(),
            'cognom2'  => $this->faker->lastName(),
            'telefon'  => $this->faker->phoneNumber(),
            'correu'   => $this->faker->unique()->safeEmail(),
        ];
    }
}
