@extends('layouts.admin')
@section('container')

<h1 class="text-center">Seja bem vindo ao Sistema de gerenciamento de <strong>Produtos</strong></h1>
<div class="alert alert-info" role="alert">
	Clique <a href="/products/create">aqui</a>  para cadastrar um novo pedido
</div>
<div style="border: 2px solid black; width: 60%; display:flex; justify-content: center;margin: auto;">
    <img src="https://images.pexels.com/photos/3423860/pexels-photo-3423860.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="imagem de produtos" style="width: 100%;">
</div>

@endsection