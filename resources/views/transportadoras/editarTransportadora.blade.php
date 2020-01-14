@extends('layout.app', ["current" => "transportadoras"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/transportadoras/{{$tran->id}}" method="POST">
            @csrf
            <div class="form-group">

                <label for="razaoSocial">Razão Social</label>
                <input type="text" class="form-control" name="razaoSocial" value="{{$tran->razaoSocial}}"
                    id="razaoSocial" placeholder="Ex: Comércio Téxtil LTDA">

                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" value="{{$tran->cnpj}}"
                    id="cnpj" placeholder="Ex: 99.999.999/9999-99">

                <label for="inscEstadual">Inscrição Estadual</label>
                <input type="text" class="form-control" name="inscEstadual" value="{{$tran->inscEstadual}}"
                    id="inscEstadual" placeholder="Ex: 999.99999-99">

                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{$tran->email}}"
                    id="email" placeholder="Ex: textil@gmail.com">

                <label for="fone">Fone</label>
                <input type="number" class="form-control" name="fone" value="{{$tran->fone}}"
                    id="fone" placeholder="Ex: 99 9 99999999">

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection