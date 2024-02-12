<?php

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
        Schema::create('role_has_permissions_cs', function (Blueprint $table) {
            $table->unsignedBigInteger('roles_c_id');
            $table->unsignedBigInteger('permissions_c_id');
            $table->foreign('roles_c_id')->references('id')->on('roles_cs');
            $table->foreign('permissions_c_id')->references('id')->on('permissions_cs');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_has_permissions_cs');
    }
};
