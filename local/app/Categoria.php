<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categoria', 'description','imagen', 'deleted',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
