<?php

namespace Database\Factories\cheatSheet;

use App\Models\CheatSheetCodes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class cheatCodesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CheatSheetCodes::class;
    public function definition(): array
    {
        return [
            // $table->foreignIdFor(CheatSheetHeaders::class)->constrained()->cascadeOnDelete();
            // $table->text('code');
            // $table->text('description');
            // $table->integer('sort_order')->default(0)->nullable()->index();
            // $table->boolean('is_active')->default(true);
            'code' => fake()->text(10),
            'description' => fake()->text(10),
            'sort_order' => fake()->randomDigitNotNull(),
            'is_active' => true,
            'cheat_sheet_headers_id' => fake()->numberBetween(1, 20),
        ];
    }
}
