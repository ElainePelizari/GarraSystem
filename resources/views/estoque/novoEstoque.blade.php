@extends('layout.app', ["current" => "estoques"])

@section('body')

<div class="card border">
<div class="card-header">
    <h5 class="card-title">Cadastro de Estoque</h5> 
</div>
    <div class="card-body">
        <form action="/estoques" method="POST"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">

                

                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>       

</div>

@endsection