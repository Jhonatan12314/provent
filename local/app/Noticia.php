<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'descripcion','imagen', 'deleted',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
