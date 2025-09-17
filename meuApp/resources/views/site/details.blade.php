@extends('site.layout')

@section('title', 'Nossa Home')

@section('conteudo')

<div class="row container"> <br>
    <div class="col s12 m6">
        <img src="{{$produto->imagem}}" alt="" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h4>{{$produto->nome}}</h4>
         <h4>R$ {{number_format($produto->preco, 2, ',', '.')}}</h4> <!-- busca o preco na tabela produtos -->
        <p>{{$produto->descricao}}</p> <!-- busca a descrição na tabela produtos -->
        <p>Postado por: {{$produto->user->firstName}}</p>
        <p>Categoria: {{$produto->categoria->nome}}</p> <!-- busca o nome da categoria -->
        <button class="btn orange btn-large">Comprar</button>
    </div>
</div>

@endsection