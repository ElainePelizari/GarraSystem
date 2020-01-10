@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card-footer">
    <a href="clientes/novo" class="btn btn-sm btn-primary" role="button">Novo Cliente</a>
</div>

<div class="card border">
    <div class="card-body">
    <div class="card-title">
        <h5 class="card-title">Clientes</h5>
    </div>

@if(count($cats) > 0)
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
    @foreach($cats as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->razaoSocial}}</td>
                    <td>{{$cat->cnpj}}</td>
                    <td>{{$cat->email}}</td>
                    <td>{{$cat->fone}}</td>

                    <td>
                    <div>
                        <a href="clientes/detalhes/{{$cat->id}}" class="btn btn-sm btn-info">Detalhes</a>
                        <a href="clientes/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="clientes/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </div>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
    @else
    <p>Você Ainda não possui clientes cadastrados</p>
@endif        
    </div>
    
</div>


@endsection