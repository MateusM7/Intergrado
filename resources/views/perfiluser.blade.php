@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
		 <img src="/img/{{$user->avatar}}" style="width:150px; height:150px; float:left; borde-radius:50%; margin-right:25px;">
         <div class="col-md-8">
		    <div class="list-group">
              <a href="#" class="list-group-item active">Perfil </a>
              <a href="#" class="list-group-item">{{$user->name}}</a>
              <a href="#" class="list-group-item">{{$user->email}}</a>
  
            </div>
        </div>
		
		</div>
		 <div class="col-md-8 col-md-offset-1">
		   <form enctype="multipart/form-data" action="/perfil" method="POST">
		 	 <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		     <label>Upadate Imagen do perfil</label> 
		     <input type="file" name="avatar">
		     <input type="submit" class="pull-right btn btn-sm btn-primary">
                 
		  </form>
		  </div>		
	</div>
</div>
@endsection
