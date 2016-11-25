<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class usersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'yukine',
            'email' => 'nishikino@songsky.com',
            'password' => bcrypt('secret'),
            'Personal_Image' => 'tumblr_of5izeNe2S1tm1dgio2_540 (1).gif',
            'Banner_Image' => 'maki_chan_by_kazenokaze-d7kpy78.png',
            'Fecha_Nacimiento' => '1994-06-3',
            'Sexo' => '1',
        ] );


         DB::table('users')->insert([
            'name' => 'Alma',
            'email' => 'alma@songsky.com',
            'password' => bcrypt('secret'),
            'Personal_Image' => 'poke.jpg',
            'Banner_Image' => 'lumi.png',
            'Fecha_Nacimiento' => '1994-06-30',
            'Sexo' => '2',
         ] );


    }

}
