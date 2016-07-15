<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto_vereador extends Model
{
    protected $table = 'projeto_vereador';


    protected $fillable = array('projeto_id', 'vereador_id' );
}
