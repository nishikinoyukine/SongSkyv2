<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
           public $timestamps = false;
 
    protected $table = 'comentario';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['comentario','user_id','com_user'];
 
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
