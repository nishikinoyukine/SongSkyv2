<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listarep extends Model
{
   public $timestamps = false;
 
    protected $table = 'listarep';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','user_id'];
 
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
