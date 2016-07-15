@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row" style="background-color:rgb(56, 67, 97);">
		<div class="col-xs-5">
			<div class="row">
				<div class=" col-md-9 .col-md-offset-3">
					<!--<div class="list-group">-->
					<ul class="nav nav-pills nav-stacked">
						<li><a  href="{!! route('group.index') !!}" class="list-group-item"><img src="/icones/vereadores.png" style="width 60; height:60px"><strong>Vereadores (a)</strong></a></li>
						<li><a href="{!! route('group.sessao.index') !!}" class="list-group-item"><img src="/icones/secao.png" style="width 50; height:50px"><strong>Sessões</strong></a></li>
						<li><a href="{!! route('group.projeto.index') !!}" class="list-group-item"><img src="/icones/projetos.png" style="width 60; height:60px"><strong>Projetos</strong></a></li>
						<li><a href="" class="list-group-item"><img src="/icones/check.png" style="width 60; height:60px"><strong> Check</strong></a></li>
						<li><a href="{!! route('group.cronometro') !!}" class="list-group-item"><img src="/icones/crono.png" style="width 50; height:50px"><strong>Cronometro</strong></a></li>
						<li><a href="#" class="list-group-item"><img src="/icones/filtro.png" style="width 60; height:60px"><strong>Filtros</strong></a></li>

					</ul>
				</div>
			</div>	
		</div>
		<div class="row" style="background-color:rgb(56, 67, 97);"></br></br>		
			<div class="col-xs-6">
				<div class="jumbotron">
					<div class="thumbnail">
						<img src="/img/camara.png" alt="...">
				    </div>
			   </div>
		   </div>
	   </div>
   </div>
   <div class="row" style="background-color:rgb(56, 67, 97);"></br></br>		
	<div class="col-xs-12">
		<div class="jumbotron">
			<div class="thumbnail">
				<span class="label label-primary">By Mateus Costa feat Marcelo Áraujo</span>
			</div>
		</div>
	</div>
</div>
</div>


	

	@stop