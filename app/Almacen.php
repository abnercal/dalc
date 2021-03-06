<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table='almacen';
    protected $primaryKey='idalmacen';

    public $timestamps=false;

    protected $fillable=[
    	'idalmacen',
    	'cantidad',
    	'idubicacion',
    	'idcompra',
    	'idmedicamento',
    	'fechavencimiento',
    ];
}
