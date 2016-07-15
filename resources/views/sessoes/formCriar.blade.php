
@extends('layout.principal')

@section('conteudo')
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="panel-default">
				<div class="panel-heading">Novo Sessão</div>

				<form enctype="multipart/form-data" action="{!! route('group.sessao.store') !!}" method="POST">
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="id_nome">Nome da sessão</label>
								<input type="text" class="form-control" id="id_nome" name="nome" placeholder="Nome da sessão" ng-model="nome" ng-required="true">
							</div>

							<div ng-show="criarForm.nome.$invalid && criarForm.nome.$dirty" class="alert alert-danger">
								<strong>Aviso!</strong> Por favor, preencha o campo nome da sessão
							</div>


							<div class="form-group">
								<label for="id_tipo">Tipo da sessão</label>
								<input type="text" class="form-control" id="id_tipo" name="tipo" placeholder="Digite o tipo da sessão" ng-model="tipo" ng-required="true">
							</div>

							<div ng-show="criarForm.tipo.$invalid && criarForm.tipo.$dirty" class="alert alert-danger">
								<strong>Aviso!</strong> Por favor, preencha o campo tipo
							</div>


							<div class="form-group">
								<label for="id_desc">Descrição</label>
								<textarea name="desc" id="id_desc" class="form-control" ng-model="email" ng-required="true" placeholder="Fale sobre a sessão aqui">Descrição</textarea>
							</div>
							<div ng-show="criarForm.desc.$invalid && criarForm.desc.$dirty" class="alert alert-danger">
								<strong>Aviso!</strong> Por favor, preencha a descrição
							</div>


							<div class="form-group">
								<label for="id_data">Data da sessão</label>
								<input type="date" class="form-control" id="id_data" name="data" placeholder="Digite a data da sessão" ng-model="data" ng-required="true">
							</div>

							<div ng-show="criarForm.data.$invalid && criarForm.data.$dirty" class="alert alert-danger">
								<strong>Aviso!</strong> Por favor, preencha o campo data da sessão
							</div>

							<div class="form-group">
								Adicionar vereadores a esta sessão <br>
								@foreach($vereador as $v)
								<input type="checkbox" name="ver[]" value="{{$v->id}}">{{$v->nome}}<br>
								@endforeach
							</div>

							<br>

							<input class="btn btn-default" type="submit" value="enviar" ng-disabled="criarForm.$invalid">

						</div>		

					</div>		

				</form>
			<div >
		<nav >
	<div>
<div>

@stop



