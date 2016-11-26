<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class comentarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('comentario')->insert([
            'comentario' => 'randomcoment332',
            'user_id' => '2',
            'com_user' => '1',
        ] );

       DB::table('comentario')->insert([
            'comentario' => 'randmcoment1122332',
            'user_id' => '3',
            'com_user' => '1',
        ] );

       DB::table('comentario')->insert([
            'comentario' => 'randmcoment1122332',
            'user_id' => '2',
            'com_user' => '3',
        ] );

       DB::table('comentario')->insert([
            'comentario' => 'randmcoment112aaaa2332',
            'user_id' => '2',
            'com_user' => '1',
        ] );

       DB::table('comentario')->insert([
            'comentario' => 'randmcoment1122332',
            'user_id' => '3',
            'com_user' => '1',
        ] );

       DB::table('comentario')->insert([
            'comentario' => 'randmcoment1122332',
            'user_id' => '2',
            'com_user' => '2',
        ] );
    }
}
