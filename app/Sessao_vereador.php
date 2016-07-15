<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessao_vereador extends Model
{
	protected $table = 'Sessao_vereador';
    protected $fillable = array('sessao_id', 'vereador_id' );
}
