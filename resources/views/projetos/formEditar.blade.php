@extends('layout.principal')

@section('conteudo')
<div class="container">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading"><caption><h5>Editar Projetos</h5></caption></div>
			    <div class="container-fluid"></br>
	               <form role="form" action="{!! route('group.projeto.update', $p->id) !!}" method="post" name="editForm">
                         <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                         <div class="col-xs-9 col-md-12">
                             <div class="col-xs-7 col-md-5">
                                  <div class="form-group">
		                               <label for="id_nome">Nome</label>
		                               <input type="text" class="form-control" id="id_nome" name="nome" value="{{$p->nome}}" placeholder="Nome do projeto">
	                               </div>
	                          </div>
	                           <div class="col-xs-7 col-md-5">
							             <div class="form-group">
								                <label for="id_tipo">Tipo de projeto</label>
								                <select  class="form-control" id="id_tipo" name="tipo"  >
									                 <option value= '{{$p->tipo}}'>{{$p->tipo}}</option>
									                 <option value = 'Indicação Legislativa'>Indicação Legislativa</option>
									                 <option value = 'Requirimento Legislativo'>Requirimento Legislativo</option>
									                 <option value = 'Projeto do Executivo'>Projeto do Executivo</option>
									                 <option value = 'Iniciativa Popular'>Iniciativa Popular</option>
								                </select>
                                          </div>
                               </div>          
	                          <div class="col-xs-7 col-md-12">
            	                   <div class="form-group">
		                                <label for="id_desc">Descrição</label>
		                                <textarea name="desc" id="id_desc" class="form-control" placeholder="Fale sobre o projeto aqui">{{$p->desc}}</textarea>
	                               </div>
	                           </div>
	                            <div class="col-xs-7 col-md-5">
                                   <div class="form-group">
		                                <label for="id_nome">Autor</label>
		                                <input type="text" class="form-control" id="id_criador" name="criador" value="{{$p->criador}}" placeholder="Digite o criador do projeto aqui">
	                                </div>
	                          </div>
	                           <div class="col-xs-7 col-md-5">
	                               <div class="form-group">
	            	                    <label for="id_coro">Coro</label>
	            	                    <input type='text' name="coro" id="id_coro" class="form-control" value='{{$p->coro}}'>
	                               </div>
	                          </div>
	                          <div class="col-xs-7 col-md-5">
                                   <div class="form-group">
		                               <label for="id_sel">Sessão</label>
		                               <select class="form-control" id="id_sel" name="sessao_id">
			                               <option value="{{$p->sessao_id}}" SELECTED>{{$sessaoAtual}}</option>
			                               @foreach($sessoes as $s)
			                                  @if($sessaoAtual != $s->nome)
			                                <option value="{{$s->id}}">{{$s->nome}}</option>
	 		                               @endif
			                               @endforeach
		                               </select>
	                                </div>
	                          </div>
	                          <div class="col-xs-7 col-md-12">
	                              <input class="btn btn-primary" type="submit" value="Salvar"></br></br> 
	                          </div>  
	                    </div>
                    </form>    
           </div>
       </div>
   </div>
</div>
@stop