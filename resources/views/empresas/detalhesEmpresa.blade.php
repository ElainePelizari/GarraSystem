@extends('layout.app', ["current" => "empresas"])

@section('body')


<div class="card" style="">
  <div class="card-header">
    Detalhes da Empresa
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Razão Social: {{$empre->razaoSocial}}</li>
    <li class="list-group-item">CNPJ: {{$empre->cnpj}}</li>
    <li class="list-group-item">Inscrição Estadual: {{$empre->inscEstadual}}</li>
    <li class="list-group-item">E-mail: {{$empre->email}}</li>
    <li class="list-group-item">Fone: {{$empre->fone}}</li>
    <li class="list-group-item">Rua: {{$empre->enderecos->rua}}</li>
    <li class="list-group-item">Bairro: {{$empre->enderecos->bairro}}</li>
    <li class="list-group-item">Número: {{$empre->enderecos->numero}}</li>
    <li class="list-group-item">Cidade: {{$empre->enderecos->cidade}}</li>
    <li class="list-group-item">UF: {{$empre->enderecos->uf}}</li>
  </ul>
</div>
</br>
<div >
    <a href="/empresas" class="btn btn-primary">Voltar</a>
</div>




@endsection