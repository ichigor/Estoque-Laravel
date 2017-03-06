@extends('principal')

@section('conteudo')


<div class="alert alert-danger">
	<ul>
@foreach($errors->all() as $error)
		<li>{{$error}}</li>
@endforeach 
	</ul>
</div>


<form action="/logar" method="post">

	<input type="hidden" name="_token" value="{{csrf_token()}}"/>

	<div class="form-group">
		<label>Email</label>
		<input name="email" class="form-control" />
	</div>
	<div class="form-group">
		<label>Senha</label>
		<input type="password" name="password" class="form-control" />
	</div>
	<button class="btn btn-primary" type="submit">Adicionar</button>
	
</form>

@stop