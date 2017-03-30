<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'description','imagen', 'deleted',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
