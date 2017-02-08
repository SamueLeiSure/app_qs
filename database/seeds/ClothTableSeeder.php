<?php

use Illuminate\Database\Seeder;
use App\Cloth;

class ClothTableSeeder extends Seeder {

  public function run()
  {
    DB::table('cloths')->delete();

    for ($i=0; $i < 10; $i++) {
      Cloth::create([
        'name' => 'name '.$i,
        'info' => 'info '.$i,
        'addr' => 'addr '.$i,
        'tel' => 'tel '.$i,
        'image' => 'image_'.$i.'.jpg',
        'piccode' => 'piccode '.$i,
        'score' => 'score '.$i,
        'hot' => '0',
        'type' => '1',
      ]);
    }
  }

}