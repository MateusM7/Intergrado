@extends('layout.principal')

@section('conteudo')
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="panel-default">
				<div class="panel-heading">Editar</div>
				<form role="form" action="{!! route('group.update', $v->id) !!}" method="post" name="editForm">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
					<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label for="id_nome">Nome</label>
								<input type="text" class="form-control" id="id_nome" name="nome" value="{{$v->nome}}" >
							</div>

							
							<div class="form-group">
								<label for="id_data">Data de Nascimento</label>
								<input type="date" class="form-control" id="id_data" name="data" value="{{$v->data_nasc}}" >
							</div>

							
							<div class="form-group">
								<label for="id_email">Email</label>
								<input type="text" class="form-control" id="id_email" name="email" value="{{$v->email}}" >
							</div>
							

							<div class="form-group">
								<label for="id_fone">Fone</label>
								<input type="text" class="form-control" id="id_fone" name="fone" value="{{$v->fone}}" >
							</div>
							
							<div class="form-group">
								<label for="id_filiacao">Filiação</label>
								<input type="text" class="form-control" id="id_filiacao" name="filiacao" value="{{$v->filiacao}}" >
							</div>

							<div class="form-group">
								<label for="id_mandato">Mandato</label>
								<input type="date" class="form-control" id="id_mandato" name="mandato" value="{{$v->mandato}}" >
							</div>

							

							
							<input class="btn btn-default" type="submit" value="enviar" ng-disabled="criarForm.$invalid">
						</div>		
						<div class="col-xs-7">
							<div class="row">
								<div class="col-xs-5">
									<img src="/img/{{$v->avatar}}" class="img-thumbnail" style="width:230px; height:230px; float:left; borde-radius:50%; margin-right:25px;"> 
									<div class="col-md-8 col-md-offset-3">
										<a href="{!! route('group.editfoto',$v->id) !!}"><button type="button" class="pull-center btn btn-primary">Editar Foto</button></a>
										
									</div>  
								</div>  
							</div>   
						</div>  
					</div>		

				</form></br>
			</div>
		</div>
	</div>
</nav>
</div>

@stop



