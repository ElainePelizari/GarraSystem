@extends('layout.app', ["current" => "empresas"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/empresas/{{$empre->id}}" method="POST">
            @csrf
            <div class="form-group">

                <label for="razaoSocial">Razão Social</label>
                <input type="text" class="form-control" name="razaoSocial" value="{{$empre->razaoSocial}}"
                    id="razaoSocial" placeholder="Ex: Comércio Téxtil LTDA">

                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" value="{{$empre->cnpj}}"
                    id="cnpj" placeholder="Ex: 99.999.999/9999-99">

                <label for="inscEstadual">Inscrição Estadual</label>
                <input type="text" class="form-control" name="inscEstadual" value="{{$empre->inscEstadual}}"
                    id="inscEstadual" placeholder="Ex: 999.99999-99">

                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{$empre->email}}"
                    id="email" placeholder="Ex: textil@gmail.com">

                <label for="fone">Fone</label>
                <input type="number" class="form-control" name="fone" value="{{$empre->fone}}"
                    id="fone" placeholder="Ex: 99 9 99999999">

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection