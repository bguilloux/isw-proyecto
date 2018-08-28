<?php

namespace isw;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
  protected $table='users';
  protected $primaryKey='id';
  public $timestamps=false;


    protected $fillable =[
    	'id',
    	'name',
    	'email',
    	'password'
    ];

    protected $guarded =[

    ];
}
