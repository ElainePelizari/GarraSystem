@extends('layout.app', ["current" => "funcionarios"])

@section('body')

<div class="card-footer">
    <a href="funcionarios/novo" class="btn btn-sm btn-primary" role="button">Novo Funcionário</a>
</div>

<div class="card border">
    <div class="card-body">
    <div class="card-title">
        <h5 class="card-title">Funcionários</h5>
    </div>

@if(count($funs) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome Completp</th>
                    <th>Data de Nascimento</th>
                    <th>E-mail</th>
                    <th>Fone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($funs as $fun)
                <tr>
                    <td>{{$fun->id}}</td>
                    <td>{{$fun->nome}}</td>
                    <td>{{$fun->dataNasc}}</td>
                    <td>{{$fun->email}}</td>
                    <td>{{$fun->fone}}</td>

                    <td>
                    <div>
                        <a href="funcionarios/detalhes/{{$fun->id}}" class="btn btn-sm btn-info">Detalhes</a>
                        <a href="funcionarios/editar/{{$fun->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="funcionarios/apagar/{{$fun->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </div>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
    @else
    <p>Você Ainda não possui funcionários cadastrados</p>
@endif        
    </div>
    
</div>


@endsection