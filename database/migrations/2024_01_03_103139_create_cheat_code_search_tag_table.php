<?php

use App\Models\CheatSheetCodes;
use App\Models\CheatSheetSearchTags;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cheat_code_search_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CheatSheetSearchTags::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(CheatSheetCodes::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cheat_code_search_tag');
    }
};
