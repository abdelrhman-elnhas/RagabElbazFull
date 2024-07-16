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
        Schema::create('day_clinics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('day_id')->constrained('days')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('clinic_id')->constrained('clinics')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_clinics');
    }
};
