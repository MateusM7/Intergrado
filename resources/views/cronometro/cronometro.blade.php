<html lang="pt-br">
   <head>
      <meta charset="utf-8" />
      <title>Laravel</title>
      <link href="{{ asset('/cssc/app.css') }}" rel="stylesheet">
       <link href="{{ asset('/cssc/bootstrap.css') }}" rel="stylesheet">
       <script src="{{ asset('/jsc/jquery-1.9.1.js') }}"></script>
       <script src="{{ asset('/jsc/bootstrap.js') }}"></script>
      <link rel="stylesheet" href="{{ asset('cssc/site.css')}}" />
      <link rel="stylesheet" href="{{ asset('cssc/cronometro.css')}}" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script type="text/JavaScript" src="{{ asset('/jsc/jplayer/dist/jplayer/jquery.jplayer.min.js') }}"></script>
      <script type="text/JavaScript" src="{{ asset('/jsc/default.js')}}"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="{{ asset('/cssc/app.css') }}" rel="stylesheet">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />          
  </head>
<body style="background:url('../img/cor.png');">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Laravel</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('/') }}">Home</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
          <li><a href="{{ url('/auth/login') }}">Login</a></li>
          <li><a href="{{ url('/auth/register') }}">Register</a></li>
          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
              {{ Auth::user()->name }} 
              <img src="/img/{{Auth::user()->avatar}}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; borde-radius:50%"><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
               <li><a href="{{ url('/perfil') }}"><i class=" fa fabtn glyphicon glyphicon-user"></i>Perfil</a></li>
               <li><a href="{{ url('/auth/logout') }}"><i class="glyphicons glyphicons-businessman"></i>Logout</a></li>
             </ul>
           </li>
           @endif
         </ul>
       </div>
     </div>
   </nav>
   <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="row" style="background-color:rgb(56, 67, 97);">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-12"></br></br>
             <!-- By Mateus Costa Cronometro-->
             <div class="col-md-12 col-md-push-1">
              <div class="col-md-9 text-center center-block">
                <div style="padding: 46px 6px !important;
                font-size: 157px !important;
                line-height: 1.33 !important;
                width: 134% !important;
                border-radius: 27px !important;" id="tempo" type="button" class="btn btn-primary btn-lg btn-block">00:00!</div>
              </div>
              <div class="marginTop col-md-12 text-center center-block">
               <button id="btn" onclick="cronometro(1)" type="button" class="col-md-2 col-md-offset-5 btn btn-success">Iniciar</button>
             </div>
             <div class="marginTop col-md-12 text-center center-block">
              <button id="btnPause" onclick="parar()" type="button" class="hide col-md-2 col-md-offset-5 btn btn-danger">Pause</button>
            </div>
            <div class="marginTop col-md-12 text-center center-block">
             <div class="col-md-4 col-md-offset-4">
              <div class="input-group">
                <span class="input-group-addon">Min</span>
                <input id="minutos" type="number" min="0" max="59" class="form-control" placeholder="Minutos" value="2">
              </div>
              <div class="input-group">
               <span class="input-group-addon">Seg</span>
               <input id="segundos" type="number"  min="0" max="59" class="form-control" placeholder="Segundos"value="0">
               <input id="pause" type="hidden" value="0"  class="form-control">
             </div>
           </div>
         </div>
       </div>
     </div>         
     <!-- By Mateus Costa Jplay    -->
     <div id="jquery_jplayer_1" class="jp-jplayer"></div>
     <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
      <div class="jp-type-single">
        <div class="jp-gui jp-interface"></div>
        <div class="jp-controls-holder">
          <div class="jp-controls"><button class="jp-play" role="button" tabindex="0"></button></div>
        </div>
      </div>
    </div>
    <div id="jquery_jplayer_0" class="jp-jplayer"></div>
    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
      <div class="jp-type-single">
        <div class="jp-gui jp-interface"></div>
        <div class="jp-controls-holder">
          <div class="jp-controls"><button class="jp-play" role="button" tabindex="0"></button></div>
        </div>
      </div>
    </div>
  </div> 
</div> 
<div class="row" style="background-color:rgb(56, 67, 97);"></br></br>   
  <div class="col-xs-6">
    <div class="jumbotron">
      <table class="table table-striped table-hover"> 
        <thead>
          <tr>
            <th>Id</th>
            <th>Vereador</th>
            <th>Filiação</th>
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
              <a href="{!! route('group.crono', $v->id) !!}">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
            </td> 
            <td>
          </tr>

          @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>
</div>
</div>
</nav>




</body>
</html>  

 