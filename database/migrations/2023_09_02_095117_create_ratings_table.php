<?php

use App\Models\Rating;
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
    Schema::create('ratings', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->timestamps();
    });

    $data = array(
      [
        'name' => 'D'
      ],
      [
        'name' => 'C'
      ],
      [
        'name' => 'B'
      ],
      [
        'name' => 'A'
      ],
      [
        'name' => 'S'
      ],
      [
        'name' => 'S+'
      ]
    );

    $this->ratingCreate($data);
  }

  private function ratingCreate($data)
  {
    foreach ($data as $datum) {
      $rating = new Rating();
      $rating->name = $datum['name'];
      $rating->save();
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('ratings');
  }
};
