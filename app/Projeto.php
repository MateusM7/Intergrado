<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $table = 'projetos';

    protected $fillable = array('nome', 'tipo' ,'desc','sessao_id' ); 

    public function vereador(){
        return $this->belongsToMany('App\Vereador');
    }

    public function sessao(){
        return $this->belongsTo('App\Sessao');
    }

 	public function votos(){
        return $this->belongsTo('App\Voto', 'projeto_id', 'vereador_id');
    }
}
