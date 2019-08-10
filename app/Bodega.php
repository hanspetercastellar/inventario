<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $table="Bodegas";

    protected $fillable=['bodega_id','bodega_codigo','bodega_ubicacion'];

    public function producto()
    {
        return $this->belongsTo(Bodega::class);
    }
}
