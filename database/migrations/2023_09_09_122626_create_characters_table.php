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
      $table->boolean('dps')->nullable();
      $table->boolean('sub_dps')->nullable();
      $table->boolean('support')->nullable();
      $table->string('img_path');
      $table->timestamps();
    });

    $data = array(
      [
        'name' => 'Al-Khaytam',
        'element_id' => 4,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/al_khaytam.webp'
      ],
      [
        'name' => 'Albedo',
        'element_id' => 2,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/albedo.webp'
      ],
      [
        'name' => 'Aloy',
        'element_id' => 6,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/aloy.webp'
      ],
      [
        'name' => 'Amber',
        'element_id' => 7,
        'dps' => null,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/amber.webp'
      ],
      [
        'name' => 'Ayaka',
        'element_id' => 6,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/ayaka.webp'
      ],
      [
        'name' => 'Ayato',
        'element_id' => 5,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/ayato.png'
      ],
      [
        'name' => 'Bai Dou',
        'dps' => true,
        'sub_dps' => true,
        'support' => null,
        'element_id' => 3,
        'img_path' => '/public/images/heroes/baidou.webp'
      ],
      [
        'name' => 'Barbara',
        'element_id' => 5,
        'dps' => true,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/barbara.webp'
      ],
      [
        'name' => 'Bay Chzhu',
        'element_id' => 4,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/bay_chzhu.webp'
      ],
      [
        'name' => 'Bennet',
        'element_id' => 7,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/bennett.webp'
      ],
      [
        'name' => 'Candace',
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'element_id' => 5,
        'img_path' => '/public/images/heroes/candace.webp'
      ],
      [
        'name' => 'Chong Yun',
        'element_id' => 6,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/chongyun.webp'
      ],
      [
        'name' => 'Collei',
        'element_id' => 4,
        'dps' => null,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/collei.webp'
      ],
      [
        'name' => 'Cyno',
        'element_id' => 3,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/cyno.webp'
      ],
      [
        'name' => 'Dehya',
        'element_id' => 7,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/dehya.webp'
      ],
      [
        'name' => 'Diluc',
        'element_id' => 7,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/diluc.webp'
      ],
      [
        'name' => 'Diona',
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'element_id' => 6,
        'img_path' => '/public/images/heroes/diona.webp'
      ],
      [
        'name' => 'Dori',
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'element_id' => 3,
        'img_path' => '/public/images/heroes/dori.webp'
      ],
      [
        'name' => 'Eula',
        'element_id' => 6,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/eula.webp'
      ],
      [
        'name' => 'Faruzan',
        'element_id' => 1,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/faruzan.webp'
      ],
      [
        'name' => 'Fischl',
        'element_id' => 3,
        'dps' => null,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/fischl.webp'
      ],
      [
        'name' => 'Fremine',
        'element_id' => 6,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/fremine.webp'
      ],
      [
        'name' => 'Gan Yu',
        'element_id' => 6,
        'dps' => true,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/ganyu.webp'
      ],
      [
        'name' => 'Gorou',
        'element_id' => 2,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/gorou.webp'
      ],
      [
        'name' => 'Heizou',
        'element_id' => 1,
        'dps' => true,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/heizou.png'
      ],
      [
        'name' => 'Hu Tao',
        'element_id' => 7,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/hutao.webp'
      ],
      [
        'name' => 'Itto',
        'element_id' => 2,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/itto.webp'
      ],
      [
        'name' => 'Jean',
        'element_id' => 1,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/jean.webp'
      ],
      [
        'name' => 'Kaeya',
        'element_id' => 6,
        'dps' => true,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/kaeya.webp'
      ],
      [
        'name' => 'Kavekh',
        'element_id' => 4,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/kavekh.webp'
      ],
      [
        'name' => 'Kazuha',
        'element_id' => 1,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/kazuha.webp'
      ],
      [
        'name' => 'Ke Qing',
        'element_id' => 3,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/keqing.webp'
      ],
      [
        'name' => 'Kirara',
        'element_id' => 4,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/kirara.webp'
      ],
      [
        'name' => 'Klee',
        'element_id' => 7,
        'dps' => true,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/klee.webp'
      ],
      [
        'name' => 'Kokonomi',
        'element_id' => 5,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/kokomi.webp'
      ],
      [
        'name' => 'Layla',
        'element_id' => 6,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/layla.webp'
      ],
      [
        'name' => 'Linett',
        'element_id' => 1,
        'dps' => null,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/linett.webp'
      ],
      [
        'name' => 'Lini',
        'element_id' => 7,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/lini.webp'
      ],
      [
        'name' => 'Lisa',
        'element_id' => 3,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/lisa.webp'
      ],
      [
        'name' => 'Mika',
        'element_id' => 6,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/mika.webp'
      ],
      [
        'name' => 'Mona',
        'element_id' => 5,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/mona.webp'
      ],
      [
        'name' => 'Nahida',
        'element_id' => 4,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/nahida.webp'
      ],
      [
        'name' => 'Nilou',
        'element_id' => 5,
        'dps' => true,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/nilou.webp'
      ],
      [
        'name' => 'Ning Guang',
        'element_id' => 2,
        'dps' => true,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/ningguang.webp'
      ],
      [
        'name' => 'Noelle',
        'element_id' => 2,
        'dps' => true,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/noelle.webp'
      ],
      [
        'name' => 'Qi Qi',
        'element_id' => 6,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/qiqi.webp'
      ],
      [
        'name' => 'Raiden',
        'element_id' => 3,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/raiden.webp'
      ],
      [
        'name' => 'Razor',
        'element_id' => 3,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/razor.webp'
      ],
      [
        'name' => 'Rosaria',
        'element_id' => 6,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/rosaria.webp'
      ],
      [
        'name' => 'Sara',
        'element_id' => 3,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/sara.webp'
      ],
      [
        'name' => 'Sayu',
        'element_id' => 1,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/sayu.webp'
      ],
      [
        'name' => 'Scaramouche',
        'element_id' => 1,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/scaramouche.webp'
      ],
      [
        'name' => 'Shen Khe',
        'element_id' => 6,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/shen_khe.png'
      ],
      [
        'name' => 'Sinobu',
        'element_id' => 3,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/sinobu.webp'
      ],
      [
        'name' => 'Sucrose',
        'element_id' => 1,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/sucrose.webp'
      ],
      [
        'name' => 'Tartaglia',
        'element_id' => 5,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/tartaglia.webp'
      ],
      [
        'name' => 'Thoma',
        'element_id' => 7,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/thoma.webp'
      ],
      [
        'name' => 'Tighnari',
        'element_id' => 4,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/tighnari.webp'
      ],
      [
        'name' => 'Traveler',
        'element_id' => 1,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/traveler.webp'
      ],
      [
        'name' => 'Traveler',
        'element_id' => 2,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/traveler.webp'
      ],
      [
        'name' => 'Traveler',
        'element_id' => 3,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/traveler.webp'
      ],
      [
        'name' => 'Traveler',
        'element_id' => 4,
        'dps' => null,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/traveler.webp'
      ],
      [
        'name' => 'Venti',
        'element_id' => 1,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/venti.webp'
      ],
      [
        'name' => 'Xiang Ling',
        'element_id' => 7,
        'dps' => null,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/xiangling.webp'
      ],
      [
        'name' => 'Xiao',
        'element_id' => 1,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/xiao.webp'
      ],
      [
        'name' => 'Xing Qiu',
        'element_id' => 5,
        'dps' => null,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/xingqiu.webp'
      ],
      [
        'name' => 'Xin Yan',
        'element_id' => 7,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/xinyan.webp'
      ],
      [
        'name' => 'Yae Miko',
        'element_id' => 3,
        'dps' => null,
        'sub_dps' => true,
        'support' => null,
        'img_path' => '/public/images/heroes/yae_miko.png'
      ],
      [
        'name' => 'Yan Fei',
        'element_id' => 7,
        'dps' => true,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/yanfei.webp'
      ],
      [
        'name' => 'Yao Yao',
        'element_id' => 4,
        'dps' => null,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/yao_yao.webp'
      ],
      [
        'name' => 'Ye Lan',
        'element_id' => 5,
        'dps' => true,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/yelan.webp'
      ],
      [
        'name' => 'Yoimiya',
        'element_id' => 7,
        'dps' => true,
        'sub_dps' => null,
        'support' => null,
        'img_path' => '/public/images/heroes/yoimiya.webp'
      ],
      [
        'name' => 'Yun Tszin',
        'element_id' => 2,
        'dps' => true,
        'sub_dps' => null,
        'support' => true,
        'img_path' => '/public/images/heroes/yun_tszin.png'
      ],
      [
        'name' => 'Zhong Li',
        'element_id' => 2,
        'dps' => null,
        'sub_dps' => true,
        'support' => true,
        'img_path' => '/public/images/heroes/zhongli.webp'
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
      $character->dps = $datum['dps'];
      $character->sub_dps = $datum['sub_dps'];
      $character->support = $datum['support'];
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
