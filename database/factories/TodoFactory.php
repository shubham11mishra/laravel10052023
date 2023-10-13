<?php

namespace Database\Factories;

use App\Models\todo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todo>
 */
class TodoFactory extends Factory
{
    protected $model = todo::class;
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'body' => fake()->sentence(5),
            'body_json' => [],

        ];
    }
}
