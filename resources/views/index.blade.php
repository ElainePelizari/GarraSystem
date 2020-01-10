@extends('layout.app', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Bem Vindo</h5>
                    <p class="card=text">
                       Garra System.
                    </p>
                    <a href="/clientes/novo" class="btn btn-primary">Cadastre seus Clientes</a>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection

