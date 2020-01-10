@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos/{{$prod->id}}" method="POST">
            @csrf
            <div class="form-group">

                <label for="nome">Nome Produto</label>
                <input type="text" class="form-control" name="nome" value="{{$prod->nome}}"
                    id="nome" placeholder="Garra Plástico">

                <label for="tamanho">Tamanho</label>
                <input type="text" class="form-control" name="tamanho" value="{{$prod->tamanho}}"
                    id="tamanho" placeholder="10 mm">

                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" name="tipo" value="{{$prod->tipo}}"
                    id="tipo" placeholder="Plástico pacote com 100">

                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="{{$prod->quantidade}}"
                    id="quantidade" placeholder="1000">

                <label for="fone">Cor</label>
                <input type="text" class="form-control" name="cor" value="{{$prod->cor}}"
                    id="cor" placeholder="Vermelho">

                <label for="preco">Preço</label>
                <input type="number" class="form-control" name="preco" value="{{$prod->preco}}"
                    id="preco" placeholder="R$ 10,99">

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection