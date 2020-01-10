@extends('layout.app', ["current" => "transportadoras"])

@section('body')

<div class="card-footer">
    <a href="transportadoras/novo" class="btn btn-sm btn-primary" role="button">Nova Transportadora</a>
</div>

<div class="card border">
    <div class="card-body">
    <div class="card-title">
        <h5 class="card-title">Transportadoras</h5>
    </div>

@if(count($trans) > 0)
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
    @foreach($trans as $tran)
                <tr>
                    <td>{{$tran->id}}</td>
                    <td>{{$tran->razaoSocial}}</td>
                    <td>{{$tran->cnpj}}</td>
                    <td>{{$tran->email}}</td>
                    <td>{{$tran->fone}}</td>

                    <td>
                    <div >
                        <a href="transportadoras/detalhes/{{$tran->id}}" role="button" class="btn btn-sm btn-info">Detalhes</a>
                        <a href="transportadoras/editar/{{$tran->id}}" role="button" class="btn btn-sm btn-primary">Editar</a>
                        <a href="transportadoras/apagar/{{$tran->id}}" role="button" class="btn btn-sm btn-danger">Apagar</a>
                    </div>
                    </td>
            
                </tr>
    @endforeach                
            </tbody>
        </table>
    @else
    <p>Você Ainda não possui transportadoras cadastradas</p>
@endif        
    </div>
</div>



@endsection