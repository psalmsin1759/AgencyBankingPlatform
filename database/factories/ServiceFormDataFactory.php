<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceFormData>
 */
class ServiceFormDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => Service::inRandomOrder()->first()->id,
            'data' => $this->faker->word,
            'type' => $this->faker->randomElement(['single', 'multiple']),
            'value' => $this->faker->word,
            'required' => $this->faker->randomElement([0, 1]),
        ];
    }
}
