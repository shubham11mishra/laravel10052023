<?php

namespace Database\Factories;

use App\Models\todolist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todolist>
 */
class TodoListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = todolist::class;
    public function definition(): array
    {
        return [
            'title' => fake()->sentence('4')
        ];
    }
}

