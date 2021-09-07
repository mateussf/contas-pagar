<html>
    <head>
        <title>Sistema de contas a pagar - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        @yield('scripts')
    </head>
    <body>

        <div class="container">
            <h1>Sistema de gerenciamento de contas</h1>

            @yield('content')
        </div>
    </body>
</html>