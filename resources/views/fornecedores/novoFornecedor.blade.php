@extends('layout.app', ["current" => "fornecedores"])

@section('body')

<div class="card border">
<div class="card-header">
    <h5 class="card-title">Cadastro de Fornecedores</h5> 
</div>
    <div class="card-body">
        <form action="/fornecedores" method="POST"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">

                <label for="razaoSocial">Razão Social</label>
                <input type="text" class="form-control {{ $errors->has('razaoSocial') ? 'is-invalid' : '' }}" name="razaoSocial" 
                    id="razaoSocial" placeholder="Preencha a Razão Social do cliente" value="{{ old('razaoSocial') }}">
                @if ($errors->has('razaoSocial'))
                    <div class="invalid-feedback">
                    {{ $errors->first('razaoSocial') }}
                    </div>
                @endif

                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control {{ $errors->has('cnpj') ? 'is-invalid' : '' }}" name="cnpj" 
                    id="cnpj" placeholder="Preencha o CNPJ do cliente" value="{{ old('cnpj') }}">
                @if ($errors->has('cnpj'))
                    <div class="invalid-feedback">
                    {{ $errors->first('cnpj') }}
                    </div>
                @endif

                <label for="inscEstadual">Inscrição Estadual</label>
                <input type="text" class="form-control {{ $errors->has('inscEstadual') ? 'is-invalid' : '' }}" name="inscEstadual" 
                    id="inscEstadual" placeholder="Preencha a inscrição estadual do cliente" value="{{ old('inscEstadual') }}">
                @if ($errors->has('inscEstadual'))
                    <div class="invalid-feedback">
                    {{ $errors->first('inscEstadual') }}
                    </div>
                @endif

                <label for="email">E-mail</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" 
                    id="email" placeholder="Preencha o email do cliente" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                    </div>
                @endif 

                <label for="fone">Fone</label>
                <input type="number" class="form-control {{ $errors->has('fone') ? 'is-invalid' : '' }}" name="fone" 
                    id="fone" placeholder="Preencha o telefone do cliente" value="{{ old('fone') }}">
                @if ($errors->has('fone'))
                    <div class="invalid-feedback">
                    {{ $errors->first('fone') }}
                    </div>
                @endif     

                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="Informe o CEP">

                <label for="rua">Rua</label>
                <input type="text" class="form-control" name="rua" id="rua" placeholder="Informe a Rua">

                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Informe o Bairro">

                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Informe a Cidade">

                <label for="uf">UF</label>
                <input type="text" class="form-control" name="uf" id="uf" placeholder="Informe o Estado">

                <label for="numero">Número</label>
                <input type="number" class="form-control" name="numero" id="numero" placeholder="Informe o numero">  

                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>       

</div>

@endsection