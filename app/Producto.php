<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable=['producto_id','producto_nombre','producto_cantidad','estado_id','bodega_id','observaciones'];

    public function bodegas()
    {
        return $this->hasMany(Bodega::class,'bodega_id','bodega_id');
    }

    public function scopeBuscar($query,$nombre)
    {
          if($nombre){
              $query->where('producto_nombre',$nombre);
          }
    }
}
