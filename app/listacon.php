<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listacon extends Model
{
      public $timestamps = false;
 
    protected $table = 'listacon';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','cancion_id','lista_id'];
 
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
