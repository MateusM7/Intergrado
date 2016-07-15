
<!doctype html>
<html lang="pt-br">
<head>

  <link href="{{ asset('/cssc/bootstrap.css') }}" rel="stylesheet">
  <script src="{{ asset('/jsc/jquery-1.9.1.js') }}"></script>
  <script src="{{ asset('/jsc/bootstrap.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('/cssc/site.css') }} "/>
  <link rel="stylesheet" href="{{ asset('/cssc/cronometro.css') }}" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/JavaScript" src="{{ asset('/jsc/jplayer/dist/jplayer/jquery.jplayer.min.js') }}"></script>
  <script type="text/JavaScript" src=" {{ asset('/jsc/default.js') }}"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>
<body style="background-color:rgb(56, 67, 97);"> 


 <div class="row"> 

   <a href="#" class="list-group-item"><h4 class="text-center">ORADOR &nbsp<span class="glyphicon glyphicon-bullhorn">&nbsp</span><strong>{{$p->nome}}</strong></h4></a></br>
   <a href="#">   </a>
   <div class="col-md-3 col-md-push-1">
    <div class="list-group">
     <img src="/img/{{$p->avatar}}"  class="img-thumbnail" style="width:230px; height:230px; float:left; borde-radius:50%; margin-right:25px;">
   </div>
   <div class="list-group">
    <h3 class="text-center" style="color:#fff; margin-right: 70px;"><strong>{{$p->filiacao}}</strong></h3>
  </div>     
</div>  
<!-- By Mateus Costa Cronometro-->
<div class="col-md-7 col-md-push-0">
  <div class="col-md-7 text-center center-block">
    <div id="tempo" type="button"  style="background:url('/img/cor.png') !important;"class="btn btn-primary btn-lg btn-block">00:00!</div>
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


</body> 
</html>