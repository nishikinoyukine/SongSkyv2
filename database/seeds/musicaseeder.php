<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class musicaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('cancion')->insert([
            'Nombre' => 'Neptune Sagashite ED',
            'url_song' => '01-neptune-sagashite.mp3',
            'url_image' => 'Aprm-diogo4d-choujigen-game-neptune-the-animation-01.png',
            'precio' => '20',
            'user_id' => '2',
            'premium' => 'Premium',

        ] );

       DB::table('cancion')->insert([
            'Nombre' => 'Dimension Tripper',
            'url_song' => '01 - Dimension Tripper!!!.mp3',
            'url_image' => 'Aprm-diogo4d-choujigen-game-neptune-the-animation-01.png',
            'precio' => '20',
            'user_id' => '2',
            'premium' => 'Premium',

        ] );

       DB::table('cancion')->insert([
            'Nombre' => 'Just be Friends',
            'url_song' => '01+Just+Be+Friends.mp3',
            'url_image' => 'tumblr_oebvzj7WYf1tj6qzbo1_540.jpg',
            'precio' => '20',
            'user_id' => '2',
            'premium' => 'Premium',

        ] );

       DB::table('cancion')->insert([
            'Nombre' => 'Zen Zen Zen Movie.Ver',
            'url_song' => '08 - Zen Zen Zense (Movie Ver.).mp3',
            'url_image' => 'Cover A.jpg',
            'precio' => '20',
            'user_id' => '2',
            'premium' => 'Premium',

        ] );

       DB::table('cancion')->insert([
            'Nombre' => 'Black Diamond',
            'url_song' => '01 - BLACK DIAMOND (Major Version).mp3',
            'url_image' => '2688293.jpg',
            'precio' => '20',
            'user_id' => '2',
            'premium' => 'Premium',

        ] );

       DB::table('cancion')->insert([
            'Nombre' => 'Into Starlight',
            'url_song' => '[IA  One] into starlight.mp3',
            'url_image' => '428892.jpg',
            'precio' => '20',
            'user_id' => '2',
            'premium' => 'Premium',

        ] );
    }
}
