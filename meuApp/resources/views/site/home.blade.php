@extends('site.layout')

@section('title', 'Nossa Home')

@section('conteudo')

<div class="container">
  <div class="row">
    @foreach ($produtos as $produto) <!-- loop para exibir cada produto da tabela produtos -->
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="https://picsum.photos/400/480" alt="placeholder">
            <a href="{{route('site.details', $produto->slug)}}" class="btn-floating halfway-fab waves-effect waves-light red"> <!-- rota para direcionar para o slug do produto selecionado -->
              <i class="material-icons">visibility</i>
            </a>
          </div>
          <div class="card-content">
            <span class="card-title">{{$produto->nome}}</span> <!-- exibe o nome do produto no card-->
            <p>{{ Str::limit($produto->descricao, 20) }}</p> <!-- exibe a descricao do produto -->
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="row center">
    {{$produtos->links('custom.pagination')}} <!-- exibe o link de cada pagina através de numerações -->
  </div>
</div>




     


@endsection

