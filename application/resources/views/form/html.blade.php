@isset($paciente)
@isset($paciente->id)
@isset($paciente->name)
@isset($paciente->cpf)
	<div class="login-page">
	  <div class="form">
		<form class="login-form" action="{{route('paciente.update',['paciente'=>$paciente->id])}}" method="post">
		  <input type="text" name="name" placeholder="Nome" value="{{$paciente->name}}"/>
		  <input type="text" name="cpf" placeholder="CPF" value="{{$paciente->cpf}}"/>
		  <button>Atualizar</button>      
		</form>
	  </div>
	</div>
@endisset
@endisset
@endisset
@endisset

	<div class="login-page">
	  <div class="form">
		<form class="login-form" action="{{route('paciente.update',['paciente'=>$paciente->id])}}" method="post">
			@csrf
			<input type="hidden" name="_method" value="put" />
		  <input type="text" name="name" placeholder="Nome" value="{{$paciente->name}}"/>
		  <input type="text" name="cpf" placeholder="CPF" value="{{$paciente->cpf}}"/>
		  <button>Atualizar</button>      
		</form>
	  </div>
	</div>
