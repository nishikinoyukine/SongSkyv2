<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicidad extends Model
{
   public $timestamps = false;
 
    protected $table = 'publicidad';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['url_banner','url_video'];
 
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
