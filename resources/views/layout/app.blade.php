<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Garra System</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
<body>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    @component('bootstrap', [ "current" => $current])
        @endcomponent
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
</div>

<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

</body>
</html>