<!DOCTIPE>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/homelayouts.css') }}">

        <title>@yield('title')</title>
    </head>

    <body>
        @yield('header')

        @yield('contents')
    </body>
</html>