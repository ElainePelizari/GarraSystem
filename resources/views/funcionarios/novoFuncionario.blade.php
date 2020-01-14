@extends('layout.app', ["current" => "funcionarios"])

@section('body')

<div class="card border">
<div class="card-header">
    <h5 class="card-title">Cadastro de Funcionário</h5> 
</div>
    <div class="card-body">
        <form action="/funcionarios" method="POST"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">

                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" 
                    id="nome" placeholder="Ex: João da Silva" value="{{ old('nome') }}">
                @if ($errors->has('nome'))
                    <div class="invalid-feedback">
                    {{ $errors->first('nome') }}
                    </div>
                @endif

                <label for="dataNasc">Data de Nascimento</label>
                <input type="date" id="date" class="form-control {{ $errors->has('dataNasc') ? 'is-invalid' : '' }}" name="dataNasc" 
                    placeholder="Ex: 19/09/1991" value="{{ old('dataNasc') }}">
                @if ($errors->has('dataNasc'))
                    <div class="invalid-feedback">
                    {{ $errors->first('dataNasc') }}
                    </div>
                @endif

                <label for="email">E-mail</label>
                <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" 
                    id="email" placeholder="Ex: joao@gmail.com" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                    </div>
                @endif

                <label for="fone">Fone</label>
                <input type="number" class="form-control {{ $errors->has('fone') ? 'is-invalid' : '' }}" name="fone" 
                    id="fone" placeholder="Ex: 99 - 9 99999999" value="{{ old('fone') }}">
                @if ($errors->has('fone'))
                    <div class="invalid-feedback">
                    {{ $errors->first('fone') }}
                    </div>
                @endif     

                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="Ex: 99.999-999">

                <label for="rua">Rua</label>
                <input type="text" class="form-control" name="rua" id="rua" placeholder="Ex: Marechal Floriano">

                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Ex: Centro">

                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex: Curitiba">

                <label for="uf">UF</label>
                <input type="text" class="form-control" name="uf" id="uf" placeholder="Ex: Paraná">

                <label for="numero">Número</label>
                <input type="number" class="form-control" name="numero" id="numero" placeholder="Ex: 88">  

                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>       

</div>

@endsection