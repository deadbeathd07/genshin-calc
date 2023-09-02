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
    Schema::create('characters_table', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->foreignId('rating_id');
      $table->foreignId('element_id');
      $table->foreignId('constellation_id');
      $table->string('img_path');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('characters_table');
  }
};
