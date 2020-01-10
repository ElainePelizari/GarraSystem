@extends('layout.app', ["current" => "fornecedores"])

@section('body')

<div class="card-footer">
    <a href="fornecedores/novo" class="btn btn-sm btn-primary" role="button">Novo Fornecedor</a>
</div>

<div class="card border">
    <div class="card-body">
    <div class="card-title">
        <h5 class="card-title">Fornecedores</h5>
    </div>

@if(count($forns) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>E-mail</th>
                    <th>Fone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($forns as $forn)
                <tr>
                    <td>{{$forn->id}}</td>
                    <td>{{$forn->razaoSocial}}</td>
                    <td>{{$forn->cnpj}}</td>
                    <td>{{$forn->email}}</td>
                    <td>{{$forn->fone}}</td>

                    <td>
                    <div >
                        <a href="fornecedores/detalhes/{{$forn->id}}" role="button" class="btn btn-sm btn-info">Detalhes</a>
                        <a href="fornecedores/editar/{{$forn->id}}" role="button" class="btn btn-sm btn-primary">Editar</a>
                        <a href="fornecedores/apagar/{{$forn->id}}" role="button" class="btn btn-sm btn-danger">Apagar</a>
                    </div>
                    </td>
            
                </tr>
    @endforeach                
            </tbody>
        </table>
    @else
    <p>Você Ainda não possui fornecedores cadastrados</p>
@endif        
    </div>
</div>



@endsection