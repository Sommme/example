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
        Schema::create('exhibits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author')->nullable();;
            $table->text('description')->nullable();;
            $table->date('creation_date')->nullable();;
            $table->string('photo');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibits');
    }
};
