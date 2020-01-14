<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    
<link href="{{ asset('css/app.css')}}" rel="stylesheet" >

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">

  </head>

<body>

<nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Garra System</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <li @if($current=="home") class="nav-link active" @else class="nav-item" @endif>
            <a class="nav-link" href="/" role="tab">
            <span class="glyphicon glyphicon-shopping-cart"></span>
            Home 
            </a>
          </li>

          <li @if($current=="empresas") class="nav-link active" @else class="nav-item" @endif>
            <a class="nav-link" href="/empresas" role="tab">Empresas do Grupo </a>
          </li>

          <li @if($current=="funcionarios") class="nav-link active" @else class="nav-item" @endif>
            <a class="nav-link" href="/funcionarios" role="tab">Funcionários </a>
          </li>

          <li @if($current=="clientes") class="nav-link active" @else class="nav-item" @endif>
            <a class="nav-link" href="/clientes" role="tab">Clientes </a>
          </li>

          <li @if($current=="fornecedores") class="nav-link active" @else class="nav-item" @endif>
            <a class="nav-link" href="/fornecedores" role="tab" aria-controls="v-pills-profile">Fornecedores </a>
          </li>

          <li @if($current=="produtos") class="nav-link active" @else class="nav-item" @endif>
            <a class="nav-link" href="/produtos" role="tab">Produtos </a>
          </li>

          <li @if($current=="transportadoras") class="nav-link active" @else class="nav-item" @endif>
            <a class="nav-link" href="/transportadoras" role="tab">Transportadoras </a>
          </li>

          <li @if($current=="estoques") class="nav-link active" @else class="nav-item" @endif>
            <a class="nav-link" href="/estoques" role="tab">Controle de Estoque </a>
          </li>

        </ul>
      </div>
    </nav>

<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

</body>
</html>
