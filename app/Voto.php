<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    protected $votos = 'votos';

    protected function vereadoress() {
    	return $this->belongsToMany('App\Vereador');
    }

    protected $fillable = array('projeto_id', 'vereador_id' ,'tipo'); 
}
