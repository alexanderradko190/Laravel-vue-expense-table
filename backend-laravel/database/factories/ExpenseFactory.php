<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * Здесь задаем значения полям date, sum, comment
     *
     */
    public function definition(): array
    {
        return [
            'date' => fake()->dateTimeBetween('-3 months'),
            'sum' => fake()->randomFloat(2, 1.00, 10000.00),
            'comment' => fake()->text(500),
        ];
    }
}
