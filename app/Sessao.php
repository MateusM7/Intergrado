<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    protected $table = 'sessao';

    protected $fillable = array('nome', 'tipo' ,'desc','data' ); 

    public function projetos() {
        return $this->hasMany('App\Projeto');
    }

    public function vereadores() {
    	return $this->belongsToMany('App\Vereador');
    }
}
