<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->text(50),
            "due_date" => $this->faker->unique()->dateTimeBetween('-3 years', '+3 years'),
            "status" => $this->faker->boolean(),
            "updated_at" => $this->faker->unique()->dateTimeBetween('-3 years', 'now')
        ];
    }
}
