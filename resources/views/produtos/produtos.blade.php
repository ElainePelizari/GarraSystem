@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card-footer">
    <a href="produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
</div>

<div class="card border">
    <div class="card-body">
    <div class="card-title">
        <h5 class="card-title">Produtos</h5>
    </div>

@if(count($prods) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Tamanho</th>
                    <th>Quantidade</th>
                    <th>Cor</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($prods as $prod)
                <tr>
                    <td>{{$prod->id}}</td>
                    <td>{{$prod->nome}}</td>
                    <td>{{$prod->tamanho}}</td>
                    <td>{{$prod->quantidade}}</td>
                    <td>{{$prod->cor}}</td>
                    <td>{{$prod->preco}}</td>

                    <td>
                    <div>
                        <a href="produtos/detalhes/{{$prod->id}}" class="btn btn-sm btn-info">Detalhes</a>
                        <a href="produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </div>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
    @else
    <p>Você Ainda não possui produtos cadastrados</p>
@endif        
    </div>
</div>



@endsection