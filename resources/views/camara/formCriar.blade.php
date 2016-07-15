
@extends('layout.principal')

@section('conteudo')

<form enctype="multipart/form-data" action="{!! route('group.store') !!}" method="POST">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<div class="row">
		<div class="col-xs-5">
			<div class="form-group">
				<label for="id_nome">Nome</label>
				<input type="text" class="form-control" id="id_nome" name="nome" placeholder="Nome do vereador" ng-model="nome" ng-required="true">
			</div>

			<div ng-show="criarForm.nome.$invalid && criarForm.nome.$dirty" class="alert alert-danger">
				<strong>Aviso!</strong> Por favor, preencha o campo nome
			</div>

			<div class="form-group">
				<label for="id_data">Data de Nascimento</label>
				<input type="date" class="form-control" id="id_data" name="data" placeholder="Digite sua data de nascimento" ng-model="data" ng-required="true">
			</div>

			<div ng-show="criarForm.data.$invalid && criarForm.data.$dirty" class="alert alert-danger">
				<strong>Aviso!</strong> Por favor, preencha o campo data de nascimento
			</div>
			<div class="form-group">
				<label for="id_email">Email</label>
				<input type="text" class="form-control" id="id_email" name="email" placeholder="Digite o email" ng-model="email" ng-required="true">
			</div>
			<div ng-show="criarForm.email.$invalid && criarForm.email.$dirty" class="alert alert-danger">
				<strong>Aviso!</strong> Por favor, preencha o campo email
			</div>

			<div class="form-group">
				<label for="id_fone">Fone</label>
				<input type="text" class="form-control" id="id_fone" name="fone" placeholder="fone" ng-model="fone" ng-required="true">
			</div>
			<div ng-show="criarForm.fone.$invalid && criarForm.email.$dirty" class="alert alert-danger">
				<strong>Aviso!</strong> Por favor, preencha o campo fone
			</div>

			<div class="form-group">
				<label for="id_filiacao">Filiação</label>
				<input type="text" class="form-control" id="id_filiacao" name="filiacao" placeholder="Filiação partidaria" ng-model="filiacao" ng-required="true">
			</div>

			<div ng-show="criarForm.filicao.$invalid && criarForm.filicao.$dirty" class="alert alert-danger">
				<strong>Aviso!</strong> Por favor, preencha o campo filição
			</div>

			<div class="form-group">
				<label for="id_mandato">Mandatos</label>
				<input type="date" class="form-control" id="id_mandato" name="mandato" placeholder="Mandatos" ng-model="mandato" ng-required="true"> 
			</div>

			<div ng-show="criarForm.mandatos.$invalid && criarForm.mandatos.$dirty" class="alert alert-danger">
				<strong>Aviso!</strong> Por favor, preencha o campo mandatos
			</div>
			 <input class="btn btn-default" type="submit" value="enviar" ng-disabled="criarForm.$invalid">

		</div>		
		<div class="col-xs-7">
			<div class="row">
				<div class="col-xs-8">
					<img src="/img/{{$p}}" class="img-thumbnail" style="width:230px; height:230px; float:left; borde-radius:50%; margin-right:25px;"> 
					<div class="col-md-8 col-md-offset-1">
						<label>Upadate Imagen do perfil</label>
						<input type="file" name="avatar" class="pull-right btn btn-sm btn-primary">
					</div>  
				</div>  
			</div>   
		</div>  
	</div>		

</form>


@stop
		 
			

    