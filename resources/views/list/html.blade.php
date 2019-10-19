<table class="rwd-table">
  <tr>
    <th>Nome</th>
    <th>CPF</th>
    <th>Ações</th>
  </tr>
  @foreach($paciente as $each)
	  <tr>
		<td data-th="Movie Title">{{$each->name}}</td>
		<td data-th="Year">{{$each->cpf}}</td>
		<td data-th="Gross">
			<form action="{{route('paciente.destroy',['paciente'=>$each->id])}}" method="post" id="myForm{{$each->id}}">
				@csrf
				<input type="hidden" name="_method" value="delete" />
				<a href="{{route('paciente.edit',['paciente'=>$each->id])}}"><i style="color: #fff" class="fas fa-user-edit"></i></a>
				<a href="#" id="link{{$each->id}}"> <i style="color: #fff" class="fas fa-user-minus"></i></a>
				<script>
				var form{{$each->id}} = document.getElementById("myForm{{$each->id}}");
document.getElementById("link{{$each->id}}").addEventListener("click", function () {
  form{{$each->id}}.submit();
});
				</script>
			</form>
			
		</td>
	  </tr>
  @endforeach
</table>