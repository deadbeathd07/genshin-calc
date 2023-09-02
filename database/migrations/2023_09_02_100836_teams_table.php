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
    Schema::create('teams_table', function (Blueprint $table) {
      $table->id();
      $table->foreignId('dps')->nullable()->constrained('characters_table');
      $table->foreignId('sub_dps')->nullable()->constrained('characters_table');
      $table->foreignId('support')->nullable()->constrained('characters_table');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('teams_table');
  }
};
