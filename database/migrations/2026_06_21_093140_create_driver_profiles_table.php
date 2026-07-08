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
       Schema::create('driver_profiles', function (Blueprint $table) {
    $table->id();

    $table->foreignId('user_id')
          ->constrained()
          ->onDelete('cascade');

    $table->string('license_number')->nullable();
    $table->date('license_expiry')->nullable();

    $table->string('vehicle_type')->nullable();
    $table->string('vehicle_model')->nullable();
    $table->string('vehicle_color')->nullable();
    $table->string('vehicle_number')->nullable();

    $table->decimal('rating', 3, 2)->default(0);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_profiles');
    }
};
