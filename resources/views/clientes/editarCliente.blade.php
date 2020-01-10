@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/clientes/{{$cat->id}}" method="POST">
            @csrf
            <div class="form-group">

                <label for="razaoSocial">Razão Social</label>
                <input type="text" class="form-control" name="razaoSocial" value="{{$cat->razaoSocial}}"
                    id="razaoSocial" placeholder="Preencha a razão social do cliente">

                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" value="{{$cat->cnpj}}"
                    id="cnpj" placeholder="Preencha o CNPJ social do cliente">

                <label for="inscEstadual">Inscrição Estadual</label>
                <input type="text" class="form-control" name="inscEstadual" value="{{$cat->inscEstadual}}"
                    id="inscEstadual" placeholder="Preencha a inscrição estadual do cliente">

                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{$cat->email}}"
                    id="email" placeholder="Preencha o e-mail do cliente">

                <label for="fone">Fone</label>
                <input type="number" class="form-control" name="fone" value="{{$cat->fone}}"
                    id="fone" placeholder="Preencha o telefone do cliente">

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection