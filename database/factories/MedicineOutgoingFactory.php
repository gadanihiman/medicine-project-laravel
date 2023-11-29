<?php

namespace Database\Factories;

use App\Models\Unit;
use App\Models\Medicine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicineOutgoing>
 */
class MedicineOutgoingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'medicine_id' => Medicine::factory(),
            'unit_id' => Unit::factory(),
            'batch_no' => $this->faker->unique()->numberBetween(1, 10),
            'exp_date' => $this->faker->date(),
            'quantity' => $this->faker->numberBetween(1, 100),
            'date' => $this->faker->date(),
        ];
    }
}
