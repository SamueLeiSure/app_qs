<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelTableSeeder extends Seeder {

  public function run()
  {
    DB::table('hotels')->delete();

    for ($i=0; $i < 10; $i++) {
      Hotel::create([
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