@extends('layout.principal')

@section('conteudo')
<div class="container">
	<div class="row">
		<nav class="navbar">
			<div class="container-fluid">
				<div class="panel panel-default">
					<div class="panel-heading">Detalhes</div>
					<h1><strong>{{$projeto->nome}}</strong></h1> 
					<p>Autor: {{$projeto->criador}}</p><br>
					<h3>{{$projeto->desc}}</h3>

					<p>Votado na Sessao: {{$sessao->nome}} - {{$sessao->data}}</p>

					<table class="table table-hover table-bordered table-condensed ">
						
						<thead>

							<tr>
								<div class="panel-heading">Como Nossos Vereadores Votaram</div>
								<th>Nome</th>
								<th>Votos</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($vereadores as $v)
							<tr>
								<td>{{$v->nome}}</td>
								@endforeach

								<?php $total = 0 ?>
								<?php $totalsim = 0 ?>
								<?php $totalnão = 0 ?>
								<?php $totalabs = 0 ?>

								@foreach ($votos as $v)
								<tr>
									<td> 
										<?php ++$total; ?>
										{{$v->nome}} - 
										@if($v->tipo == 1)
										<td>Sim</td> 
										<?php ++$totalsim  ?>
										@else
										@if($v->tipo == 2)
										<td>Não</td> 
										<?php ++$totalnão  ?>
										@else
										<?php ++$totalabs  ?>
										<td>Abstenção</td>									@endif
										@endif

									</td>
								</tr>
								@endforeach
							</tr>
						<tbody>
					</table>
							@foreach($projetoN as $p)
							@if($p->valor > 0)
							O projeto poderá ser votado somente em: {{$sessao->data}}
							@else
							@foreach($projetoA as $p)
							@if($p->valor > 0 )
							<h4>Sessão aberta</h4> 
							Vereadores que irão votar na sessão: <br>
							@foreach($verSes as $vs)
							-{{$vs->nome}} - <a href="/camara/projetos/votar/{{$vs->id}}/{{$projeto->id}}" title="">votar</a><br>
							@endforeach
							@else
							<br><br>
							<div class="row">
								<div class="col-md-3 col-xs-3"><button type="button" class="btn btn-primary btn-lg btn-block">Total: {{$total}}</button></div>
								<div class="col-md-3 col-xs-3"><button type="button" class="btn btn-primary btn-lg btn-block"> Votos Sim: {{$totalsim}}</button></div>
								<div class="col-md-3 col-xs-3"><button type="button" class="btn btn-primary btn-lg btn-block"> Votos Não : {{$totalnão}}</button></div>
								<div class="col-md-3 col-xs-3"><button type="button" class="btn btn-primary btn-lg btn-block"> Abstenções : {{$totalabs}}</button></div>
							
							</div><br><br>
							
							@endif
							@endforeach
							@endif
							@endforeach



							<div>
								<nav>
									<div>
										<div>

											<div>

												@stop