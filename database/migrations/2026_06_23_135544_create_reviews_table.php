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
    Schema::create('reviews', function (Blueprint $table) {
    $table->id();

    $table->foreignId('booking_request_id')
        ->constrained()
        ->cascadeOnDelete();

    // Driver jis ko booking assign hui
    $table->foreignId('user_id')
        ->constrained('users')
        ->cascadeOnDelete();

    $table->enum('reviewer_type', ['user', 'driver']);
    // User -> Driver Review
    $table->tinyInteger('rating')->nullable();
    $table->text('comment')->nullable();

    // Driver -> User Review

    $table->timestamps();
});

        }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
