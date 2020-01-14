@extends('layout.app', ["current" => "transportadoras"])

@section('body')

<div class="card border">
<div class="card-header">
    <h5 class="card-title">Cadastro de Transportadoras</h5> 
</div>
    <div class="card-body">
        <form action="/transportadoras" method="POST"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">

                <label for="razaoSocial">Razão Social</label>
                <input type="text" class="form-control {{ $errors->has('razaoSocial') ? 'is-invalid' : '' }}" name="razaoSocial" 
                    id="razaoSocial" placeholder="Ex: Comércio Téxtil LTDA" value="{{ old('razaoSocial') }}">
                @if ($errors->has('razaoSocial'))
                    <div class="invalid-feedback">
                    {{ $errors->first('razaoSocial') }}
                    </div>
                @endif

                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control {{ $errors->has('cnpj') ? 'is-invalid' : '' }}" name="cnpj" 
                    id="cnpj" placeholder="Ex: 99.999.999/9999-99" value="{{ old('cnpj') }}">
                @if ($errors->has('cnpj'))
                    <div class="invalid-feedback">
                    {{ $errors->first('cnpj') }}
                    </div>
                @endif

                <label for="inscEstadual">Inscrição Estadual</label>
                <input type="text" class="form-control {{ $errors->has('inscEstadual') ? 'is-invalid' : '' }}" name="inscEstadual" 
                    id="inscEstadual" placeholder="Ex: 999.99999-99" value="{{ old('inscEstadual') }}">
                @if ($errors->has('inscEstadual'))
                    <div class="invalid-feedback">
                    {{ $errors->first('inscEstadual') }}
                    </div>
                @endif

                <label for="email">E-mail</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" 
                    id="email" placeholder="Ex: textil@gmail.com" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                    </div>
                @endif 

                <label for="fone">Fone</label>
                <input type="number" class="form-control {{ $errors->has('fone') ? 'is-invalid' : '' }}" name="fone" 
                    id="fone" placeholder="Ex: 99 9 99999999" value="{{ old('fone') }}">
                @if ($errors->has('fone'))
                    <div class="invalid-feedback">
                    {{ $errors->first('fone') }}
                    </div>
                @endif     

                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="EX: 99.999-999">

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