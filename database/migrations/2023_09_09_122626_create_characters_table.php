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

    $data = array(
      [
        'name' => 'Al-Khaytam',
        'rating_id' => 6,
        'element_id' => 4,
        'constellation_id' => 1,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/al_khaytam.webp'
      ],
      [
        'name' => 'Al-Khaytam',
        'rating_id' => 6,
        'element_id' => 4,
        'constellation_id' => 2,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/al_khaytam.webp'
      ],
      [
        'name' => 'Al-Khaytam',
        'rating_id' => 6,
        'element_id' => 4,
        'constellation_id' => 7,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/al_khaytam.webp'
      ],
      [
        'name' => 'Albedo',
        'rating_id' => 5,
        'element_id' => 2,
        'constellation_id' => 1,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/albedo.webp'
      ],
      [
        'name' => 'Albedo',
        'rating_id' => 2,
        'element_id' => 2,
        'constellation_id' => 1,
        'position_id' => 3,
        'img_path' => '/public/images/heroes/albedo.webp'
      ],
      [
        'name' => 'Albedo',
        'rating_id' => 5,
        'element_id' => 2,
        'constellation_id' => 7,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/albedo.webp'
      ],
      [
        'name' => 'Albedo',
        'rating_id' => 2,
        'element_id' => 2,
        'constellation_id' => 7,
        'position_id' => 3,
        'img_path' => '/public/images/heroes/albedo.webp'
      ],
      [
        'name' => 'Aloy',
        'rating_id' => 1,
        'element_id' => 6,
        'constellation_id' => 1,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/aloy.webp'
      ],
      [
        'name' => 'Amber',
        'rating_id' => 1,
        'element_id' => 7,
        'constellation_id' => 1,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/amber.webp'
      ],
      [
        'name' => 'Amber',
        'rating_id' => 1,
        'element_id' => 7,
        'constellation_id' => 3,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/amber.webp'
      ],
      [
        'name' => 'Amber',
        'rating_id' => 1,
        'element_id' => 7,
        'constellation_id' => 7,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/amber.webp'
      ],
      [
        'name' => 'Ayaka',
        'rating_id' => 6,
        'element_id' => 6,
        'constellation_id' => 1,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/ayaka.webp'
      ],
      [
        'name' => 'Ayaka',
        'rating_id' => 6,
        'element_id' => 6,
        'constellation_id' => 1,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/ayaka.webp'
      ],
      [
        'name' => 'Ayaka',
        'rating_id' => 6,
        'element_id' => 6,
        'constellation_id' => 7,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/ayaka.webp'
      ],
      [
        'name' => 'Ayato',
        'rating_id' => 5,
        'element_id' => 5,
        'constellation_id' => 1,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/ayato.png'
      ],
      [
        'name' => 'Ayato',
        'rating_id' => 4,
        'element_id' => 5,
        'constellation_id' => 1,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/ayato.png'
      ],
      [
        'name' => 'Ayato',
        'rating_id' => 5,
        'element_id' => 5,
        'constellation_id' => 3,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/ayato.png'
      ],
      [
        'name' => 'Ayato',
        'rating_id' => 5,
        'element_id' => 5,
        'constellation_id' => 7,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/ayato.png'
      ],
      [
        'name' => 'Ayato',
        'rating_id' => 4,
        'element_id' => 5,
        'constellation_id' => 7,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/ayato.png'
      ],
      [
        'name' => 'Ayato',
        'rating_id' => 4,
        'element_id' => 5,
        'constellation_id' => 7,
        'position_id' => 3,
        'img_path' => '/public/images/heroes/ayato.png'
      ],
      [
        'name' => 'Bai Dou',
        'rating_id' => 4,
        'element_id' => 3,
        'constellation_id' => 1,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/baidou.webp'
      ],
      [
        'name' => 'Bai Dou',
        'rating_id' => 2,
        'element_id' => 3,
        'constellation_id' => 1,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/baidou.webp'
      ],
      [
        'name' => 'Bai Dou',
        'rating_id' => 4,
        'element_id' => 3,
        'constellation_id' => 3,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/baidou.webp'
      ],
      [
        'name' => 'Bai Dou',
        'rating_id' => 1,
        'element_id' => 3,
        'constellation_id' => 5,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/baidou.webp'
      ],
      [
        'name' => 'Bai Dou',
        'rating_id' => 4,
        'element_id' => 3,
        'constellation_id' => 7,
        'position_id' => 2,
        'img_path' => '/public/images/heroes/baidou.webp'
      ],
      [
        'name' => 'Bai Dou',
        'rating_id' => 1,
        'element_id' => 3,
        'constellation_id' => 7,
        'position_id' => 1,
        'img_path' => '/public/images/heroes/baidou.webp'
      ],
    );
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('characters');
  }
};
