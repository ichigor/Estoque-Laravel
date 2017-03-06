@extends('principal')

@section('conteudo')
<h1>Detalhes do produto  {{$p->nome}}  </h1>
<ul>
	<li>Valor: {{$p->valor}} </li>
	<li>Descricao: {{$p->descricao}} </li>
	<li>Quantidade: {{$p->quantidade}} </li>
</ul>
@stop