@extends('layout.app', ["current" => "funcionarios"])

@section('body')


<div class="card" style="">
  <div class="card-header">
    Detalhes do Funcionário
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nome Completo: {{$fun->nome}}</li>
    <li class="list-group-item">Data de Nascimento: {{$fun->dataNasc}}</li>
    <li class="list-group-item">E-mail: {{$fun->email}}</li>
    <li class="list-group-item">Fone: {{$fun->fone}}</li>
    <li class="list-group-item">Rua: {{$fun->enderecos->rua}}</li>
    <li class="list-group-item">Bairro: {{$fun->enderecos->bairro}}</li>
    <li class="list-group-item">Número: {{$fun->enderecos->numero}}</li>
    <li class="list-group-item">Cidade: {{$fun->enderecos->cidade}}</li>
    <li class="list-group-item">UF: {{$fun->enderecos->uf}}</li>
  </ul>
</div>
</br>
<div >
    <a href="/funcionarios" class="btn btn-primary">Voltar</a>
</div>




@endsection