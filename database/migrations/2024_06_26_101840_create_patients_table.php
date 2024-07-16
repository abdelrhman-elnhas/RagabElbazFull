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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('fourth_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('military_nember')->nullable();
            $table->string('national_id')->unique();
            $table->string('computer_nember')->unique()->nullable();
            $table->string('type')->nullable(); //الرتبه
            $table->integer('number_of_clinics')->default(5);
            $table->string('typeofmilitary')->nullable();
            $table->string('typeofwork')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
