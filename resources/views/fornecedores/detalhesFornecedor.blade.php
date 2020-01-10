@extends('layout.app', ["current" => "fornecedores"])

@section('body')

<div class="card" style="width: 18rem;">
  <div class="card-header">
    Detalhes do Fornecedor
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Razão Social: {{$forn->razaoSocial}}</li>
    <li class="list-group-item">CNPJ: {{$forn->cnpj}}</li>
    <li class="list-group-item">Inscrição Estadual: {{$forn->inscEstadual}}</li>
    <li class="list-group-item">E-mail: {{$forn->email}}</li>
    <li class="list-group-item">Fone: {{$forn->fone}}</li>
    <li class="list-group-item">Rua: {{$forn->enderecos->rua}}</li>
    <li class="list-group-item">Bairro: {{$forn->enderecos->bairro}}</li>
    <li class="list-group-item">Número: {{$forn->enderecos->numero}}</li>
    <li class="list-group-item">Cidade: {{$forn->enderecos->cidade}}</li>
    <li class="list-group-item">UF: {{$forn->enderecos->uf}}</li>
  </ul>
</div>
</br>
<div >
    <a href="/fornecedores" class="btn btn-primary">Voltar</a>
</div>




@endsection