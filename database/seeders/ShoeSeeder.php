<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i =0 ; $i < 20; $i++){
            DB::table('shoes')->insert([
                'name' => Str::random(10).' shoes',
                'price' => rand(1000, 50000) * 1000,
                'picture' => 'https://dummyimage.com/600x400/009dff/0011ff.png&text='.$i,
                'description' => Str::random(rand(10, 50)),
            ]);
        }
    }
}
