<?php

namespace isw;

use Illuminate\Database\Eloquent\Model;

class Mantencion extends Model
{
protected $table='registro_mantenciones';
  protected $primaryKey='patente';
 
  public $timestamps=false;


    protected $fillable =[
    	'patente' ,
		'fecha' ,
		'kilometraje ',
    ];

    protected $guarded =[

    ];
}
