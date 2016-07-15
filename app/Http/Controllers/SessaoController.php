<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Sessao;
use App\Vereador;
use App\Projeto;
use App\Sessao_vereador;
use DB;

class SessaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $sessoes = Sessao::all();
        $vereador = Vereador::all();
        return view('sessoes.index', ['sessoes' => $sessoes]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vereador = Vereador::all();
        return view('sessoes.formCriar', ['vereador' => $vereador]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $novaSessao = new Sessao($dados);
        $novaSessao->save();

        $ver = $request->input('ver');

        $ses_ver = array();
        $i = 0;
        foreach ($ver as $sv) {

            $ses_ver[$i] = new Sessao_vereador();
            $ses_ver[$i]->vereador_id = $sv;
            $ses_ver[$i]->sessao_id = $novaSessao->id;
            $ses_ver[$i]->save();
            $i++;
        }


        return redirect()->action('SessaoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // pegar todos os Vereadores 
         $vereadores= Vereador::all();
         
        //Projetos pertecentes a sessão
        $projetos = Sessao::find($id)->projetos->lists('nome');

        $sessoes = Sessao::find($id);
       
        return view('sessoes.descricao' , ['sessoes' => $sessoes, 'projetos' => $projetos,'vereadores' => $vereadores]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sessoes = Sessao::find($id);
        return view('sessoes.formEditar', ['s' => $sessoes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nome = $request->input('nome');
        $tipo = $request->input('tipo');
        $desc = $request->input('desc');
        $data = $request->input('data');

        $sessao = Sessao::find($id);
        $sessao->nome = $nome; 
        $sessao->tipo= $tipo; 
        $sessao->desc = $desc; 
        $sessao->data = $data;


        $sessao->save();

        return redirect()->action('SessaoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $projetos = Sessao::find($id)->projetos()->lists('id');

        foreach ($projetos as $p) {
            $deleted = DB::delete('delete from projeto_vereador where ? = projeto_id', [$p]);
        }

        $deleted = DB::delete('delete from projetos where ? = sessao_id', [$id]); 

        Sessao::destroy($id);

         return redirect()
                ->action('SessaoController@index');
    }
}
