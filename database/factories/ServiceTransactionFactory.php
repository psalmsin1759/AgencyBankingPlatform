<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Service;
use App\Models\Agent;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceTransaction>
 */
class ServiceTransactionFactory extends Factory
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
            'agent_id' => Agent::inRandomOrder()->first()->id,
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'transaction_id' => $this->faker->uuid,
            'description' => $this->faker->sentence,
        ];
    }
}
