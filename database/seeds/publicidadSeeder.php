<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class publicidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('publicidad')->insert([
            'url_banner' => 'mak.png',
            'url_video' => 'https://www.youtube.com/watch?v=yrhf1jBrg8g',
        ] );
    }
}
