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
         $this->call(usersseeder::class);
         $this->call(publicidadSeeder::class);
         $this->call(comentarioseeder::class);
         $this->call(musicaseeder::class);
    }
}
