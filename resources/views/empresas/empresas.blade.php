@extends('layout.app', ["current" => "empresas"])

@section('body')

<div class="card-footer">
    <a href="empresas/novo" class="btn btn-sm btn-primary" role="button">Novo Empresa</a>
</div>

<div class="card border">
    <div class="card-body">
    <div class="card-title">
        <h5 class="card-title">Empresas do Grupo</h5>
    </div>

@if(count($empres) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>E-mail</th>
                    <th>Fone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($empres as $empre)
                <tr>
                    <td>{{$empre->id}}</td>
                    <td>{{$empre->razaoSocial}}</td>
                    <td>{{$empre->cnpj}}</td>
                    <td>{{$empre->email}}</td>
                    <td>{{$empre->fone}}</td>

                    <td>
                    <div>
                        <a href="empresas/detalhes/{{$empre->id}}" class="btn btn-sm btn-info">Detalhes</a>
                        <a href="empresas/editar/{{$empre->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="empresas/apagar/{{$empre->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </div>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
    @else
    <p>Você Ainda não possui empresas cadastradas</p>
@endif        
    </div>
    
</div>


@endsection