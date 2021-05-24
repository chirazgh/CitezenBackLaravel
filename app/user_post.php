<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_post extends Model
{
    //
   
    protected $fillable = [
        "user_id",
        "post_id"
    ];
    protected $table='user_post';
}
