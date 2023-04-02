@extends('layouts.admin')
@section('container')

<form class="form-inline my-2 my-lg-0" method="GET" action="/products">
	<input class="form-control mr-sm-2" type="search" placeholder="Procurar pedido" aria-label="Search" name="search">
	<button class="btn my-2 my-sm-0" style="background-color: #FB6090; color:#fff;" type="submit">Pesquisar</button>
</form>

@if($search)
<h1 class="text-center">Buscando por produto: {{ $search }}</h1>
@else
<h1 class="text-center">Lista de produto</h1>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nome do Produto</th>
			<th scope="col">Descrição do Produto</th>
			<th scope="col">Categoria</th>
			<th scope="col">Preço</th>
			<th scope="col">Quantidade</th>
			<th scope="col"> Editar </th>
			<th scope="col"> Deletar </th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<th scope="row">{{ $product->id }}</th>
			<td>{{ $product->name }}</td>
			<td>{{ $product->description }} </td>
			<td>{{ $product->category }}</td>
			<td>{{ $product->price }}</td>
			<td>{{ $product->amount }}</td>
			<td><a href="/product/edit/{{ $product->id }}"><input class="btn btn-primary" type="reset" value="Editar"></a></td>
			<td>
				<form action="/product/destroy/{{ $product->id }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger delete-btn">Deletar</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@if(count($products) == 0 && $search)
<div class="alert alert-info" role="alert">
	Não há produto cadastrados com esse nome! <a href="/products">Ver todos</a>
</div>
@elseif(count($products) == 0)
<div class="alert alert-info" role="alert">
	Não há produto cadastrados
</div>
@endif

@endsection