
	
<form action="/camara/projetos/voto/{{$id_ver}}/{{$id_proj}}" method="POST">
	 <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  
  		  <input type="radio" name="voto" value="1" id="id_sim"> 
		  <label for="id_sim">Sim</label><br>
						  
		  <input type="radio" name="voto" value="2" id="id_nao"> 
		  <label for="id_nao">Não</label><br>
						  
		  <input type="radio" name="voto" value="3" id="id_abs"> 
		  <label for="id_abs">Abstenção</label><br>

		  <input type="submit" value="Votar">

</form>