<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vereador;
use App\Projeto;
use App\Voto;
use App\Sessao;
use App\Projeto_vereador;
use DB;


class ProjetoController extends Controller
{

    public function index(){
        $projetos = Projeto::all();
        return view('projetos.index', ['projetos' => $projetos]);
    } 

    public function show ($id) {

        //retorna a sessão do projeto 
        $sessao = Projeto::find($id)->sessao;

        //Retorna os dados do projeto 
        $projeto = Projeto::find($id);

        //retorna os vereadores donos do projeto 
        $vereadores = Projeto::find($id)->vereador;

        //Retorna os vereadores da sessão
        $verSes = Sessao::find($sessao->id)->vereadores;

        //Retorna os votos do projeto
        $votos = DB::select('select v.nome, vt.tipo from votos vt, projetos p, vereador v WHERE
        p.id = vt.projeto_id and v.id = vt.vereador_id and vt.projeto_id = ? ', [$id]);


        //Projetos ja votados
        $projetoV = DB::select('select distinct p.id, p.nome, p.tipo from projetos p, votos v WHERE
        p.id = v.projeto_id');

        //conta os projetos cuja a sessão ainda não aconteceu
        $data = date('Y-m-d');
        $projetoN = DB::select('select count(p.nome) as valor from projetos p, sessao s where
         s.data > ? and ? = s.id', [$data, $sessao->id]);

        //conta os projetos cuja a data da sessão é igual a data atual
        $projetoA = DB::select('select count(p.nome) as valor from projetos p, sessao s where
         s.data = ? and ? = s.id', [$data, $sessao->id]);



    	return view('projetos.descricao', ['sessao' => $sessao, 'vereadores' => $vereadores, 'projeto' => $projeto,
            'votos' => $votos, 'projetoN' => $projetoN, 'projetoA' => $projetoA, 'verSes' => $verSes
         ]);
    }

    public function create(){
        $data = date('Y-m-d');
        $sessoes = DB::select('select id, nome from sessao where data > ? ', [$data]);
        $vereador = Vereador::all();
        return view('projetos.formCriar', ['sessoes' => $sessoes, 'vereador' => $vereador]);
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        $novoProjeto = new Projeto($dados);
        $novoProjeto->save();

        $ver = $request->input('ver');

        $proj_ver = array();
        $i = 0;
        foreach ($ver as $pv) {

            $proj_ver[$i] = new Projeto_vereador();
            $proj_ver[$i]->vereador_id = $pv;
            $proj_ver[$i]->projeto_id = $novoProjeto->id;
            $proj_ver[$i]->save();
            $i++;
        }

        return redirect()->action('ProjetoController@index');
    }

    public function votar($id, $id2) {
        return view('projetos.formVoto', ['id_ver' => $id, 'id_proj' => $id2]);
    }

    public function voto(Request $request, $id, $id2)
    {

        $tipo = $request->input('voto');

        $voto = new Voto();
        $voto->projeto_id = $id2;
        $voto->vereador_id = $id;
        $voto->tipo = $tipo;
        $voto->save();
        return redirect()->action('ProjetoController@show', $id2);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = date('Y-m-d');
        $sessoes = DB::select('select id, nome from sessao where data > ? ', [$data]);
        $projeto = Projeto::find($id);
        $sessaoAtual = Projeto::find($id)->sessao()->value('nome');
        return view('projetos.formEditar', ['p' => $projeto, 'sessoes' => $sessoes, 'sessaoAtual' => $sessaoAtual]);
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
        $sessao_id = $request->input('sessao_id');
        $desc = $request->input('desc');
        $criador = $request->input('criador');
        $coro = $request->input('coro');

        $projeto = Projeto::find($id);
        $projeto->nome = $nome; 
        $projeto->tipo= $tipo; 
        $projeto->desc = $desc; 
        $projeto->sessao_id = $sessao_id; 
        $projeto->criador = $criador;
        $projeto->coro= $coro;


        $projeto->save();

        return redirect()->action('ProjetoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        //Primeiro é deletado a quele projeto na tabela projeto_vereador, pois o id do projeto é chave estrangeira do projeto_vereador
         $deleted = DB::delete('delete from projeto_vereador where ? = projeto_id', [$id]);  

         //Depois o vereador pode ser exvluido
         Projeto::destroy($id);
        

         return redirect()
                ->action('ProjetoController@index');
    }
}





