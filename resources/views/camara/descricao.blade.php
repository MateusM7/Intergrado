@extends('layout.principal')

@section('conteudo')
<div class="container">
  <nav class="navbar">
    <div class="container-fluid">
     <div class="panel panel-default">
      <div class="panel-heading">Detalhes</div>
      <div class="panel-body" style="background:#ddd;">
        <ul class="nav navbar-nav navbar-right">
          <li class="btn-group btn-group-lg" class="btn btn-default"><a href="{!! route('group.index') !!}"><span class="glyphicon glyphicon-arrow-left" ></span><strong>Voltar</strong></a></li>   
        </ul>
        <div class="row">
          <div class="col-sm-4 col-md-3">
            <div>
             <img src="/img/{{$v->avatar}}"class="img-thumbnail" style="width:230px; height:230px; float:left; borde-radius:50%; margin-right:25px;">
             <div class="caption">
               <a href="{!! route('group.editfoto',$v->id) !!}"><button type="button" class=" pull-center btn btn-primary">Editar Foto</button></a>
             </div>
           </div>

         </div>
         <div class="col-xs-7">


          <div class="list-group">
            <a href="#" class="list-group-item">
              <h3> Nome: {{$v->nome}}</h3>
            </a>
            <a href="#" class="list-group-item">Filiação: {{$v->filiacao}}</a>
            <a href="#" class="list-group-item">Data de Nascimento: {{$v->data}}</a>
            <a href="#" class="list-group-item">Email: {{$v->email}}</a>
            <a href="#" class="list-group-item">Telefone: {{$v->fone}}</a>
            <a href="#" class="list-group-item">Mandatos: {{$v->mandato}}</a>
          </div>
          <table class="table table-striped table-hover"> 
            <thead>
              <tr>

              </tr>
            </thead>  
            <tr>

       <td>
          @if(!empty($projs))
          @foreach($projs as $p)
          <div class="pull-right btn btn-sm btn-primary">
            <a class="pull-right btn btn-sm btn-primary" href="/inicio/vereador/{{$v->id}}/projeto/{{$p->id}}">{{$p->nome}}</a>
          </div>
          <br>
          @endforeach
          @else
          <div class="alert-danger">
             <p><a href="#" class="btn btn-danger" role="button">Esse Vereador Ainda Não Tem Projetos</a></p>
            
          </div>
          @endif

       </td>
     </table>
   </div>
 </div>
</nav>
</div>
</div>
</div>
</div>
</div>
<!--<a href="{!! route('group.crono', $v->id) !!}" class="btn" >crono</a>  <!--Link para o cronometro de cada vereador-->

<!--<a href="{!! route('group.index') !!}">Home</a> Link para o inicio da pagina -->

@stop