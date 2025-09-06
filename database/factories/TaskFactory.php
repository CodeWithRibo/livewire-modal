<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement(['A1','A2', 'A3', 'A4', 'A5', 'A6', 'A7']),
            'status' => $this->faker->randomElement(['pending','in_progress', 'complete']),
            'description' => $this->faker->realTextBetween(50, 100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
