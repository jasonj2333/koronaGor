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
        Schema::create('szczyty', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasmo_id')->constrained('pasma')->cascadeOnDelete();
            $table->string('nazwa');
            $table->string('slug')->unique();
            $table->unsignedSmallInteger('wysokosc');
            $table->text('opis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szczyty');
    }
};
