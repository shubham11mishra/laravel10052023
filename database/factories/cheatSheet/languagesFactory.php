<?php

namespace Database\Factories\cheatSheet;

use App\Models\CheatSheetLanguages;
use Illuminate\Database\Eloquent\Factories\Factory;


class languagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CheatSheetLanguages::class;

    public function definition(): array
    {
        return [
            'language_name' => fake()->name(),
            'language_slug' => fake()->slug(),
        ];
    }
}
