<?php

namespace isw;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{
    protected $table='conductor';
  protected $primaryKey='rut_conductor';
 
  public $timestamps=false;


    protected $fillable =[
    	'rut_conductor' ,
		'patente' ,
		'nombre_conductor ',
		'pass_conductor',
    ];

    protected $guarded =[

    ];
}
