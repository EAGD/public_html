<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{

	protected $table = 'direcciones';	
    protected $fillable = [
    	'nombre_inicio','direccion_inicio','ciudad_inicio',
    	'nombre_destino','direccion_destino','ciudad_destino'
    ];


    public function user(){
    	return $this->belongsTo(User::class);
    }
}
