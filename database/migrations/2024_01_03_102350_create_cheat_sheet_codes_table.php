<?php

use App\Models\CheatSheetHeaders;
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
        Schema::create('cheat_sheet_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CheatSheetHeaders::class)->constrained()->cascadeOnDelete();
            $table->text('code');
            $table->text('description');
            $table->integer('sort_order')->default(0)->nullable()->index();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cheat_sheet_codes');
    }
};
