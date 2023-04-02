@extends('layouts.admin')
@section('container')

<h1 class="text-center">Editando Produto: {{$product->name}}</h1>

<form action="/product/update/{{$product->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-goup">
        <div class="card border-primary p-2 mb-3">
            <label for="name">Nome do Produto</label>
            <input class="form-control" type="text" name="name" required id="name" value="{{$product->name}}">

            <label for="description">Descrição do Produto</label>
            <textarea class="form-control" name="description" required id="description">{{$product->description}}</textarea>

            <label for="category">Categoria</label>
            <select name="category" id="category" class="form-select form-control" aria-label="Default select example">
                <option value="{{$product->category}}" selected>{{$product->category}}</option>
                <option value="Alimento" selected>Alimento</option>
                <option value="Limpeza">Limpeza</option>
                <option value="Higiene">Higiene</option>
                <option value="Outros">Outros</option>
            </select>

            <label for="price">Preço</label>
            <input type="number" step="0.01" name="price" id="price" required class="form-control" value="{{$product->price}}">

            <label for="amount">Quantidade</label>
            <input type="text" name="amount" id="amount" required class="form-control" value="{{$product->amount}}">

        </div>
    </div>
    <input class="btn m-2" style="background-color: #0096FF; color:#fff;" type="submit" value="Atualizar Produto">
</form>

@endsection