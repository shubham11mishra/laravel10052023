<?php

namespace Database\Factories\cheatSheet;

use App\Models\CheatSheetHeaders;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class headersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CheatSheetHeaders::class;
    public function definition(): array
    {
        return [
            // $table->string('title');
            // $table->string('description');
            // $table->foreignIdFor(CheatSheetLanguageVersion::class)->constrained()->cascadeOnDelete();
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'cheat_sheet_language_version_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
