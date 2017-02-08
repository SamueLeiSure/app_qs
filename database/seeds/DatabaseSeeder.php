<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(HotelTableSeeder::class);
        // $this->call(LookTableSeeder::class);
        $this->call(ClothTableSeeder::class);
    }
}
