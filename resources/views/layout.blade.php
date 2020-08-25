<html>
    <head>
        <title>Car Flow - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Test sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>