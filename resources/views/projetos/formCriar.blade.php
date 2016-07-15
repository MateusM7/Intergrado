
@extends('layout.principal')

@section('conteudo')
<div class="container">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading"><caption><h5>Novo Projetos</h5></caption></div>
			   <div class="container-fluid"></br>
				<form enctype="multipart/form-data" action="{!! route('group.projeto.store') !!}" method="POST">
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					   <div class="row">
						  <div class="col-xs-9 col-md-12">
							     <div class="col-xs-7 col-md-5">
							          <div class="form-group">
								          <label for="id_nome">Nome do Projeto</label>
								          <input type="text" class="form-control" id="id_nome" name="nome" placeholder="Nome do projeto" ng-model="nome" ng-required="true">
							           </div>

							                   <div ng-show="criarForm.nome.$invalid && criarForm.nome.$dirty" class="alert alert-danger">
								                      <strong>Aviso!</strong> Por favor, preencha o campo nome do projeto
							                   </div>
								   </div>
                                   <div class="col-xs-7 col-md-5">
							             <div class="form-group">
								                <label for="id_tipo">Tipo de projeto</label>
								                <select  class="form-control" id="id_tipo" name="tipo"  >
									                 <option SELECTED disabled>Tipo de Projetos</option>
									                 <option value = 'Indicação Legislativa'>Indicação Legislativa</option>
									                 <option value = 'Requirimento Legislativo'>Requirimento Legislativo</option>
									                 <option value = 'Projeto do Executivo'>Projeto do Executivo</option>
									                 <option value = 'Iniciativa Popular'>Iniciativa Popular</option>
								                </select>
                                          </div>

							              <div ng-show="criarForm.tipo.$invalid && criarForm.tipo.$dirty" class="alert alert-danger">
								              <strong>Aviso!</strong> Por favor, preencha o campo tipo
							              </div>
								    </div>
								    <div class="col-xs-7 col-md-9">
							        <div class="form-group">
								            <label for="id_desc">Descrição</label>
								            <textarea name="desc" id="id_desc" class="form-control" ng-model="desc" ng-required="true" placeholder="Fale sobre o projeto aqui">Descrição</textarea>
							        </div>
							             <div ng-show="criarForm.desc.$invalid && criarForm.desc.$dirty" class="alert alert-danger">
								              <strong>Aviso!</strong> Por favor, preencha a descrição
							             </div>
							          </div> 
							          <div class="col-xs-7 col-md-5">
							               <div class="form-group">
							          	        <label for="id_nome">Autor</label>
							          	        <input type="text" class="form-control" id="id_criador" name="criador"  placeholder="Digite o Nome Autor do Projeto aqui">
							               </div>
							                    <div ng-show="criarForm.criador.$invalid && criarForm.criador.$dirty" class="alert alert-danger">
								                    <strong>Aviso!</strong> Por favor, preencha Oo Campo Autor
							                     </div>
                                       </div> 
							          <div class="col-xs-7 col-md-5">
							              <div class="form-group">
								              <label for="id_coro">Coro</label>
								              <input type='text' name="coro" id="id_coro" class="form-control" ng-model="coro" ng-required="true" placeholder="Regra de Votação do Projeto">
							             </div>
							                   <div ng-show="criarForm.coro.$invalid && criarForm.coro.$dirty" class="alert alert-danger">
								                    <strong>Aviso!</strong> Por favor, preencha a Coro
							                    </div>
							            </div>              
                                        <div class="col-xs-7 col-md-5">
							               <div class="form-group">
								               <label for="id_sel">Sessão</label>
								               <select class="form-control" id="id_sel" name="sessao_id">
									              <option SELECTED disabled>Sessões disponiveis</option>
									              @foreach($sessoes as $s)
									              <option value="{{$s->id}}">{{$s->nome}}</option>
									               @endforeach
								               </select>
							                </div>
							             </div>

                                      <div class="col-xs-7 col-md-10">
							              <div class="form-group">
								              Adicionar vereadores a este projeto <br>
								              @foreach($vereador as $v)
								             <input type="checkbox" name="ver[]" value="{{$v->id}}">{{$v->nome}}<br>
								              @endforeach
							                </div>
							          <input class="btn btn-primary" type="submit" value="Salvar" ng-disabled="criarForm.$invalid"></br></br>
						          </div>		
                        	</div>	
					  </div>		

				</form>
				<div>
			</div>
		<div>
	<div>

<div>


@stop



