<?php

use App\Models\Constellation;
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
    Schema::create('constellations', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->timestamps();
    });

    $data = array(
      [
        'name' => 'C0'
      ],
      [
        'name' => 'C1'
      ],
      [
        'name' => 'C2'
      ],
      [
        'name' => 'C3'
      ],
      [
        'name' => 'C4'
      ],
      [
        'name' => 'C5'
      ],
      [
        'name' => 'C6'
      ]
    );

    $this->constellationCreate($data);
  }

  private function constellationCreate($data)
  {
    foreach ($data as $datum) {
      $constellation = new Constellation();
      $constellation->name = $datum['name'];
      $constellation->save();
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('constellations');
  }
};
