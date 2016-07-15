@extends('layout.principal')

@section('conteudo')
<div class="container">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading"><caption><h5>Sessão</h5></caption></div>
			    <div class="container-fluid"></br>
				     <div class="col-xs-10 col-md-12">
					
						 <h1 class="btn btn-warning btn-lg btn-block" href="#" role="button" style="
						     color: #000;
                             background-color: #eea236;
                             border-color: #eea236;">
                             <strong>Nome: {{$sessoes->nome}}</strong></h1>
					
					    <div class="col-xs-9 col-md-6">
						   <h3 class="btn btn-warning btn-lg btn-block" href="#" role="button" style="
						       color: #000;
                               background-color: #eea236;
                               border-color: #eea236;">
                               <strong>Tipo :{{$sessoes->tipo}}</strong></h3> 
					   </div>
					   <div class="col-xs-9 col-md-6">
						  <h3 class="btn btn-warning btn-lg btn-block" href="#" role="button" style="
						       color: #000;
                               background-color: #eea236;
                               border-color: #eea236;">
                               <strong>Data: {{$sessoes->data}}</strong></h3> 
					   </div>
					   <div class="col-xs-9 col-md-12">
						  <div class="jumbotron"><div class="thumbnail"><h5>{{$sessoes->desc}}</h5></div></div> 
					  </div>
					  <div class="col-xs-9 col-md-12">
						 <label>Projetos</label>
						 <select  class="form-control" id="id_tipo" name="tipo"  >
							@foreach($projetos as $p)
							<option  value= '{{$p}}'>{{$p}}</option>
							@endforeach
						</select>
					</div>
				</div>
			   <div class="col-xs-9 col-md-12">
				   <div class="container-fluid">	
					  <table class="table table-hover">
						   <thead>
							  <tr>
								 <th>Id</th>
								 <th>Vereador</th>
								 <th>Filiação</th>
								 <th>Presentes</th>
							 </tr>
						   </thead>

						  <tbody>
							  @foreach ($vereadores as $v)
							 <tr>
								 <td>{{$v->id}}</td>
								 <td>{{$v->nome}}</td>
								 <td>{{$v->filiacao}}</td>


								<!--Link para as descriçoes de cada vereador-->
								<td>
									<input type="checkbox" aria-label="...">
								</td> 
								<td>
									<div class="btn-group">
										<button class="btn btn-default  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Votar <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<form action="" method="POST">
												<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

												<input type="radio" name="voto" value="1" id="id_sim"> 
												<label for="id_sim">Sim</label><br>

												<input type="radio" name="voto" value="2" id="id_nao"> 
												<label for="id_nao">Não</label><br>

												<input type="radio" name="voto" value="3" id="id_abs"> 
												<label for="id_abs">Abstenção</label><br>

												<input type="submit" value="Votar">

											</form>
										</ul>
									</div>
								</td> <!-- Link para editar um um vereador -->
								<td>
									

								</td> <!-- Link para remover um vereador-->
					        </tr>
							    @endforeach
						  </tbody>
					  </table>
			       </div>
			   </div>
			   <div class="col-xs-9 col-md-6">
				  <div class="btn-group btn-group-justified" role="group" aria-label="...">
					  <div class="btn-group" role="group">
						  <button type="button" class="btn btn-primary btn-lg btn-block"><h3><strong>Presentes: 0?</strong></h3></button>
					  </div>
					  <div class="btn-group" role="group">
						 <button type="button" class="btn btn-primary btn-lg btn-block"><h3><strong>Ausentes: 0?</strong></h3></button>
					 </div>
			      </div>
			 </div>
			 <div class="col-xs-9 col-md-6">
				  <div class="btn-group btn-group-justified" role="group" aria-label="...">
					  <div class="btn-group" role="group">
						  <button type="button" class="btn btn-success btn-lg btn-block"><h3><strong>Sim: 0?</strong></h3></button>
					  </div>
					  <div class="btn-group" role="group">
						 <button type="button" class="btn btn-danger btn-lg btn-block"><h3><strong>Não: 0?</strong></h3></button>
					 </div>
					 <div class="btn-group" role="group">
						 <button type="button" class="btn btn-warning btn-lg btn-block"><h3><strong>Abst: 0?</strong></h3></button>
					 </div>
			      </div>
			   </div>
		</div>
    </div>
</div>
@stop