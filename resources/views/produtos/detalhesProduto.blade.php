@extends('layout.app', ["current" => "produtos"])

@section('body')


<div class="card" style="width: 18rem;">
  <div class="card-header">
    Detalhes do Produto
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nome do Produto: {{$prod->nome}}</li>
    <li class="list-group-item">Tamanho: {{$prod->tamanho}}</li>
    <li class="list-group-item">Tipo: {{$prod->tipo}}</li>
    <li class="list-group-item">Quantidade: {{$prod->quantidade}}</li>
    <li class="list-group-item">Cor: {{$prod->cor}}</li>
    <li class="list-group-item">Preço: {{$prod->preco}}</li>
  </ul>
</div>
</br>
<div >
    <a href="/produtos" class="btn btn-primary">Voltar</a>
</div>




@endsection