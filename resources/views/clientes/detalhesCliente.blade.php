@extends('layout.app', ["current" => "clientes"])

@section('body')


<div class="card" style="">
  <div class="card-header">
    Detalhes do Cliente
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Razão Social: {{$cat->razaoSocial}}</li>
    <li class="list-group-item">CNPJ: {{$cat->cnpj}}</li>
    <li class="list-group-item">Inscrição Estadual: {{$cat->inscEstadual}}</li>
    <li class="list-group-item">E-mail: {{$cat->email}}</li>
    <li class="list-group-item">Fone: {{$cat->fone}}</li>
    <li class="list-group-item">Rua: {{$cat->enderecos->rua}}</li>
    <li class="list-group-item">Bairro: {{$cat->enderecos->bairro}}</li>
    <li class="list-group-item">Número: {{$cat->enderecos->numero}}</li>
    <li class="list-group-item">Cidade: {{$cat->enderecos->cidade}}</li>
    <li class="list-group-item">UF: {{$cat->enderecos->uf}}</li>
  </ul>
</div>
</br>
<div >
    <a href="/clientes" class="btn btn-primary">Voltar</a>
</div>




@endsection