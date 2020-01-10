@extends('layout.app', ["current" => "transportadoras"])

@section('body')

<div class="card" style="width: 18rem;">
  <div class="card-header">
    Detalhes da Transportadora
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Razão Social: {{$tran->razaoSocial}}</li>
    <li class="list-group-item">CNPJ: {{$tran->cnpj}}</li>
    <li class="list-group-item">Inscrição Estadual: {{$tran->inscEstadual}}</li>
    <li class="list-group-item">E-mail: {{$tran->email}}</li>
    <li class="list-group-item">Fone: {{$tran->fone}}</li>
    <li class="list-group-item">Rua: {{$tran->enderecos->rua}}</li>
    <li class="list-group-item">Bairro: {{$tran->enderecos->bairro}}</li>
    <li class="list-group-item">Número: {{$tran->enderecos->numero}}</li>
    <li class="list-group-item">Cidade: {{$tran->enderecos->cidade}}</li>
    <li class="list-group-item">UF: {{$tran->enderecos->uf}}</li>
  </ul>
</div>
</br>
<div>
    <a href="/transportadoras" class="btn btn-primary">Voltar</a>
</div>

@endsection