<?php

use App\Models\Element;
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
    Schema::create('elements', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('img_path');
      $table->timestamps();
    });

    $data = array(
      [
        'name' => 'anemo',
        'img_path' => '/public/images/elements/anemo.png'
      ],
      [
        'name' => 'geo',
        'img_path' => '/public/images/elements/geo.png'
      ],
      [
        'name' => 'electro',
        'img_path' => '/public/images/elements/electro.png'
      ],
      [
        'name' => 'dendro',
        'img_path' => '/public/images/elements/dendro.png'
      ],
      [
        'name' => 'hydro',
        'img_path' => '/public/images/elements/hydro.png'
      ],
      [
        'name' => 'cryo',
        'img_path' => '/public/images/elements/cryo.png'
      ],
      [
        'name' => 'pyro',
        'img_path' => '/public/images/elements/pyro.png'
      ],
    );

    $this->elementCreate($data);
  }

  private function elementCreate($data)
  {
    foreach ($data as $datum) {
      $element = new Element();
      $element->name = $datum['name'];
      $element->img_path = $datum['img_path'];
      $element->save();
    }
  }



  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('elements');
  }
};
