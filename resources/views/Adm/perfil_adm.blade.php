
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Administrador</div>
				<div class="panel-body"></br>
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
								<form enctype="multipart/form-data" action="{!! route('group.update_avatar') !!}" method="POST">
									<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
									<label >Upadate Imagen do perfil</label></br> 
									<span class="btn btn-sm btn-primary"><input type="file" name="avatar"></span> 
									<span><input type="submit"  value="Enviar" class="pull-right btn btn-sm btn-primary"></span>

								</form></br>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
