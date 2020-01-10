@extends('layout.app', ["current" => "estoques"])

@section('body')

<div class="card-footer">
    <a href="estoques/novo" class="btn btn-sm btn-primary" role="button">Cadastrar um novo Estoque</a>
</div>

<div class="card border">
    <div class="card-body">
    <div class="card-title">
        <h5 class="card-title">Controle de Estoque</h5>
    </div>

@if(count($estoques) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Data de Entrada</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($estoques as $estoque)
                <tr>
                    <td>{{$estoque->id}}</td>
                    <td>{{$estoque->produto->nome}}</td>
                    <td>{{$estoque->quantidade}}</td>
                    <td>{{$estoque->dtaEntrada}}</td>

                    <td>
                    <div>
                        <a href="estoques/detalhes/{{$estoque->id}}" class="btn btn-sm btn-info">Detalhes</a>
                        <a href="estoques/editar/{{$estoque->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="estoques/apagar/{{$estoque->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </div>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
    @else
    <p>Você Ainda não possui estoques cadastrados</p>
@endif        
    </div>
    
</div>


@endsection