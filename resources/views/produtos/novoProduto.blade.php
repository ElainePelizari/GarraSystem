@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
<div class="card-header">
    <h5 class="card-title">Cadastro de Produtos</h5> 
</div>
    <div class="card-body">
        <form action="/produtos" method="POST"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">

                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" 
                    id="nome" placeholder="Garra Plástica" value="{{ old('nome') }}">
                @if ($errors->has('nome'))
                    <div class="invalid-feedback">
                    {{ $errors->first('nome') }}
                    </div>
                @endif

                <label for="tamanho">Tamanho</label>
                <input type="text" class="form-control {{ $errors->has('tamanho') ? 'is-invalid' : '' }}" name="tamanho" 
                    id="tamanho" placeholder="10 mm" value="{{ old('tamanho') }}">
                @if ($errors->has('tamanho'))
                    <div class="invalid-feedback">
                    {{ $errors->first('tamanho') }}
                    </div>
                @endif

                <label for="tipo">Tipo</label>
                <input type="text" class="form-control {{ $errors->has('tipo') ? 'is-invalid' : '' }}" name="tipo" 
                    id="tipo" placeholder="Tipo produto" value="{{ old('tipo') }}">
                @if ($errors->has('tipo'))
                    <div class="invalid-feedback">
                    {{ $errors->first('tipo') }}
                    </div>
                @endif

                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control {{ $errors->has('quantidade') ? 'is-invalid' : '' }}" name="quantidade" 
                    id="quantidade" placeholder="100" value="{{ old('quantidade') }}">
                @if ($errors->has('quantidade'))
                    <div class="invalid-feedback">
                    {{ $errors->first('quantidade') }}
                    </div>
                @endif 

                <label for="cor">Cor</label>
                <input type="text" class="form-control {{ $errors->has('cor') ? 'is-invalid' : '' }}" name="cor" 
                    id="cor" placeholder="Vermelho" value="{{ old('cor') }}">
                @if ($errors->has('cor'))
                    <div class="invalid-feedback">
                    {{ $errors->first('cor') }}
                    </div>
                @endif

                <label for="preco">Preço</label>
                <input type="text" class="form-control {{ $errors->has('preco') ? 'is-invalid' : '' }}" name="preco" 
                    id="preco" placeholder="Vermelho" value="{{ old('preco') }}">
                @if ($errors->has('preco'))
                    <div class="invalid-feedback">
                    {{ $errors->first('preco') }}
                    </div>
                @endif

                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>       

</div>

@endsection