<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'description','precio','imagen','deleted',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function getCategoria(){
        return $this->belongsTo('App\Categoria', 'idcategoria'); 
    }
}
