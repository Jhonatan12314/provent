<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'estado','telefono','email','deleted',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


}
