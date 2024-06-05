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
        Schema::create('exhibition_exhibits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exhibition_id')->constrained('exhibitions')->onDelete('cascade')->cascadeOnUpdate();
            $table->foreignId('exhibit_id')->constrained('exhibits')->onDelete('cascade')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibition_exhibits');
    }
};
