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
    Schema::create('characters', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->foreignId('rating_id')->constrained('ratings');
      $table->foreignId('element_id')->constrained('elements');
      $table->foreignId('constellation_id')->constrained('constellations');
      $table->foreignId('position_id')->constrained('positions');
      $table->string('img_path');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('characters');
  }
};
