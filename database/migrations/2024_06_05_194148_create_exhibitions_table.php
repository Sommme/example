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
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->integer('ticket_price');
            $table->integer('max_tickets');
            $table->integer('remaining_tickets');
            $table->string('photo');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->cascadeOnUpdate();
            $table->foreignId('direction_id')->constrained('directions')->onDelete('cascade')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitions');
    }
};
