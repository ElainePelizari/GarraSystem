@extends('layout.app', ["current" => "funcionarios"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/funcionarios/{{$fun->id}}" method="POST">
            @csrf
            <div class="form-group">

                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" name="nome" value="{{$fun->nome}}"
                    id="nome" placeholder="Ex: João da Silva">

                <label for="dataNasc">Data de Nascimento</label>
                <input type="date" class="form-control" name="dataNasc" value="{{$fun->dataNasc}}"
                    id="dataNasc" placeholder="Ex: 19/09/1991">

                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{$fun->email}}"
                    id="email" placeholder="Ex: joao@gmail.com">

                <label for="fone">Fone</label>
                <input type="number" class="form-control" name="fone" value="{{$fun->fone}}"
                    id="fone" placeholder="Ex: 99 9 99999999">

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection