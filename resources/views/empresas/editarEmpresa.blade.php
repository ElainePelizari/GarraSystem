@extends('layout.app', ["current" => "empresas"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/empresas/{{$empre->id}}" method="POST">
            @csrf
            <div class="form-group">

                <label for="razaoSocial">Razão Social</label>
                <input type="text" class="form-control" name="razaoSocial" value="{{$empre->razaoSocial}}"
                    id="razaoSocial" placeholder="Preencha a razão social">

                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" name="cnpj" value="{{$empre->cnpj}}"
                    id="cnpj" placeholder="Preencha o CNPJ">

                <label for="inscEstadual">Inscrição Estadual</label>
                <input type="text" class="form-control" name="inscEstadual" value="{{$empre->inscEstadual}}"
                    id="inscEstadual" placeholder="Preencha a inscrição estadual">

                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{$empre->email}}"
                    id="email" placeholder="Preencha o e-mail">

                <label for="fone">Fone</label>
                <input type="number" class="form-control" name="fone" value="{{$empre->fone}}"
                    id="fone" placeholder="Preencha o telefone">

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection