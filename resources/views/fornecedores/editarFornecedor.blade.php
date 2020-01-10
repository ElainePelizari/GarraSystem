@extends('layout.app', ["current" => "fornecedores"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/fornecedores/{{$forn->id}}" method="POST">
            @csrf
            <div class="form-group">

                <label for="razaoSocial">Razão Social</label>
                <input type="text" class="form-control" name="razaoSocial" value="{{$forn->razaoSocial}}"
                    id="razaoSocial" placeholder="Preencha a razão social do fornecedor">

                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" value="{{$forn->cnpj}}"
                    id="cnpj" placeholder="Preencha o CNPJ social do fornecedor">

                <label for="inscEstadual">Inscrição Estadual</label>
                <input type="text" class="form-control" name="inscEstadual" value="{{$forn->inscEstadual}}"
                    id="inscEstadual" placeholder="Preencha a inscrição estadual do fornecedor">

                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{$forn->email}}"
                    id="email" placeholder="Preencha o e-mail do fornecedor">

                <label for="fone">Fone</label>
                <input type="number" class="form-control" name="fone" value="{{$forn->fone}}"
                    id="fone" placeholder="Preencha o telefone do fornecedor">

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection