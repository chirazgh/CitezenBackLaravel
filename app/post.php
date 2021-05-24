<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $fillable = [
        'titre',
        'imageP	',
        'description',
        'signe',
        'valide'
    ];
    protected $table='post';

    /**
     * Relation one to one whidh post
     */
    public function region()
    {
        return $this->belongsTo('App\region');
    }

    /**
     * Relation many to many whidh user
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\UserPost');
    }
}
