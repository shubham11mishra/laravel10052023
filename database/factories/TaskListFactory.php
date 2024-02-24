<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\LoginUser;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskList>
 */
class TaskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
             //make user_id dynamic
            'is_completed' => fake()->boolean,
        ];
    }

    public function configure(){
        return $this->afterCreating(function($taskList){
            $taskList->user_id()->associate(LoginUser::factory());
        });
    }


}
