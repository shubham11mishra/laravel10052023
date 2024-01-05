<?php

namespace Database\Factories\cheatSheet;

use App\Models\CheatSheetLanguageVersion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class versionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CheatSheetLanguageVersion::class;

    public function definition(): array
    {
        return [
            'version_name' => fake()->word(),
            'cheat_sheet_languages_id' => fake()->numberBetween(1, 20),
        ];
    }
}
