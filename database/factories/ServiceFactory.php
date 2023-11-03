<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ServiceCategory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'amount' => $this->faker->randomFloat(2, 10, 200),
            'commission' => $this->faker->randomFloat(2, 10, 200),
            'service_category_id' => ServiceCategory::inRandomOrder()->first()->id,
        ];
    }
}
