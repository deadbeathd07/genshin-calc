<?php

use App\Models\Character;
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
      $table->foreignId('element_id')->constrained('elements');
      $table->string('img_path');
      $table->timestamps();
    });

    $data = array(
      [
        'name' => 'Al-Khaytam',
        'element_id' => 4,
        'img_path' => '/public/images/heroes/al_khaytam.webp'
      ],
      [
        'name' => 'Albedo',
        'element_id' => 2,
        'img_path' => '/public/images/heroes/albedo.webp'
      ],
      [
        'name' => 'Aloy',
        'element_id' => 6,
        'img_path' => '/public/images/heroes/aloy.webp'
      ],
      [
        'name' => 'Amber',
        'element_id' => 7,
        'img_path' => '/public/images/heroes/amber.webp'
      ],
      [
        'name' => 'Ayaka',
        'element_id' => 6,
        'img_path' => '/public/images/heroes/ayaka.webp'
      ],
      [
        'name' => 'Ayato',
        'element_id' => 5,
        'img_path' => '/public/images/heroes/ayato.png'
      ],
      [
        'name' => 'Bai Dou',
        'element_id' => 3,
        'img_path' => '/public/images/heroes/baidou.webp'
      ],
    );

    $this->characterCreate($data);
  }

  private function characterCreate($data)
  {
    foreach ($data as $datum) {
      $character = new Character();
      $character->name = $datum['name'];
      $character->element_id = $datum['element_id'];
      $character->img_path = $datum['img_path'];
      $character->save();
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('characters');
  }
};
