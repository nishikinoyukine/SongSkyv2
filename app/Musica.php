<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
       public $timestamps = false;
 
    protected $table = 'cancion';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','url_song','url_image','premium','precio','user_id'];
 
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

   
}
