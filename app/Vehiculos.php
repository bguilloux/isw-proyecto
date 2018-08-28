<?php

namespace isw;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
  protected $table='vehiculos';
  protected $primaryKey='patente';
 
  public $timestamps=false;


    protected $fillable =[
    	'patente' ,
		'id_marca' ,
		'modelo',
		'tipo_neumatico' ,
		'aro' ,
		'tipo_combustible',
		'kilometraje ',
    ];

    protected $guarded =[

    ];
}
