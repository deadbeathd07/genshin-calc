<?php

use App\Models\CharacterInfo;
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
    Schema::create('character_infos', function (Blueprint $table) {
      $table->id();
      $table->foreignId('character_id')->constrained('characters');
      $table->foreignId('rating_id')->constrained('ratings');
      $table->foreignId('constellation_id')->constrained('constellations');
      $table->foreignId('position_id')->constrained('positions');
      $table->timestamps();
    });

    $data = array(
      [
        'character_id' => 1,
        'rating_id' => 6,
        'element_id' => 4,
        'constellation_id' => 1,
        'position_id' => 1,
      ],
      [
        'character_id' => 1,
        'rating_id' => 6,
        'element_id' => 4,
        'constellation_id' => 2,
        'position_id' => 1,
      ],
      [
        'character_id' => 1,
        'rating_id' => 6,
        'element_id' => 4,
        'constellation_id' => 7,
        'position_id' => 1,
      ],
      [
        'character_id' => 2,
        'rating_id' => 5,
        'element_id' => 2,
        'constellation_id' => 1,
        'position_id' => 2,
      ],
      [
        'character_id' => 2,
        'rating_id' => 2,
        'element_id' => 2,
        'constellation_id' => 1,
        'position_id' => 3,
      ],
      [
        'character_id' => 2,
        'rating_id' => 5,
        'element_id' => 2,
        'constellation_id' => 7,
        'position_id' => 2,
      ],
      [
        'character_id' => 2,
        'rating_id' => 2,
        'element_id' => 2,
        'constellation_id' => 7,
        'position_id' => 3,
      ],
      [
        'character_id' => 3,
        'rating_id' => 1,
        'element_id' => 6,
        'constellation_id' => 1,
        'position_id' => 1,
      ],
      [
        'character_id' => 4,
        'rating_id' => 1,
        'element_id' => 7,
        'constellation_id' => 1,
        'position_id' => 2,
      ],
      [
        'character_id' => 4,
        'rating_id' => 1,
        'element_id' => 7,
        'constellation_id' => 3,
        'position_id' => 2,
      ],
      [
        'character_id' => 4,
        'rating_id' => 1,
        'element_id' => 7,
        'constellation_id' => 7,
        'position_id' => 2,
      ],
      [
        'character_id' => 5,
        'rating_id' => 6,
        'element_id' => 6,
        'constellation_id' => 1,
        'position_id' => 1,
      ],
      [
        'character_id' => 5,
        'rating_id' => 6,
        'element_id' => 6,
        'constellation_id' => 1,
        'position_id' => 1,
      ],
      [
        'character_id' => 5,
        'rating_id' => 6,
        'element_id' => 6,
        'constellation_id' => 7,
        'position_id' => 1,
      ],
      [
        'character_id' => 6,
        'rating_id' => 5,
        'element_id' => 5,
        'constellation_id' => 1,
        'position_id' => 1,
      ],
      [
        'character_id' => 6,
        'rating_id' => 4,
        'element_id' => 5,
        'constellation_id' => 1,
        'position_id' => 2,
      ],
      [
        'character_id' => 6,
        'rating_id' => 5,
        'element_id' => 5,
        'constellation_id' => 3,
        'position_id' => 1,
      ],
      [
        'character_id' => 6,
        'rating_id' => 5,
        'element_id' => 5,
        'constellation_id' => 7,
        'position_id' => 1,
      ],
      [
        'character_id' => 6,
        'rating_id' => 4,
        'element_id' => 5,
        'constellation_id' => 7,
        'position_id' => 2,
      ],
      [
        'character_id' => 6,
        'rating_id' => 4,
        'element_id' => 5,
        'constellation_id' => 7,
        'position_id' => 3,
      ],
      [
        'character_id' => 7,
        'rating_id' => 4,
        'element_id' => 3,
        'constellation_id' => 1,
        'position_id' => 2,
      ],
      [
        'character_id' => 7,
        'rating_id' => 2,
        'element_id' => 3,
        'constellation_id' => 1,
        'position_id' => 1,
      ],
      [
        'character_id' => 7,
        'rating_id' => 4,
        'element_id' => 3,
        'constellation_id' => 3,
        'position_id' => 2,
      ],
      [
        'character_id' => 7,
        'rating_id' => 1,
        'element_id' => 3,
        'constellation_id' => 5,
        'position_id' => 1,
      ],
      [
        'character_id' => 7,
        'rating_id' => 4,
        'element_id' => 3,
        'constellation_id' => 7,
        'position_id' => 2,
      ],
      [
        'character_id' => 7,
        'rating_id' => 1,
        'element_id' => 3,
        'constellation_id' => 7,
        'position_id' => 1,
      ],
    );
  }

  private function characterInfoCreate($data)
  {
    foreach ($data as $datum) {
      $characterInfo = new CharacterInfo();
      $characterInfo->character_id = $datum['character_id'];
      $characterInfo->rating_id = $datum['rating_id'];
      $characterInfo->element_id = $datum['element_id'];
      $characterInfo->constellation_id = $datum['constellation_id'];
      $characterInfo->position_id = $datum['position_id'];
      $characterInfo->save();
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('character_infos');
  }
};
