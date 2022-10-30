<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ url('css/style.css') }}">
    </head>
    <body>
        <navbar>
            <h1>SERVER MONITORING SYSTEM</h1>
            @yield('content')
        </navbar>
    </body>
</html>