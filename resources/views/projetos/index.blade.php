@extends('layout.principal')

@section('conteudo')

<div class="container">
	
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading"><caption><h5>Projetos</h5></caption></div>
			<div class="container-fluid"></br>
				<a class="pull-right btn btn-sm btn-primary" href="{!! route('group.projeto.create') !!}"><span class="glyphicon glyphicon-plus"></span>Projeto</a></br></br>
				
				@foreach ($projetos as $p)

				<div class="col-md-4 col-xs-4.5">
					<div class="jumbotron" style="background-color:rgb(209, 218, 48); !important">
						<div class="caption">
							<address>
								<h2><small>{{$p->nome}}<strong></strong></small></h2>
								<h3><small>{{$p->tipo}}</small></h3>
								<h3><small>Autor: {{$p->criador}}</small></h3>
							</address>
							<div class="btn-group btn-group-justified" role="group" aria-label="...">
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-default"><a href="{!! route('group.projeto.show', $p->id) !!}">
										<span class="glyphicon glyphicon-eye-open"></span></a></button>
									</div>
									<div class="btn-group" role="group">
										<button type="button" class="btn btn-default"><a href="{!! route('group.projeto.edit', $p->id) !!}">
											<span class="glyphicon glyphicon-pencil"></span>
										</a></button>
									</div>
									<div class="btn-group" role="group">
										<button type="button" class="btn btn-default"><a href="{!! route('group.projeto.destroy', $p->id) !!}">
											<span class="glyphicon glyphicon-trash"></span></a></button>
										</div>
									</div>


								</div>
							</div>
						</div>
						@endforeach
					</br></br></div>					
				</div>
			</div>

			@stop




