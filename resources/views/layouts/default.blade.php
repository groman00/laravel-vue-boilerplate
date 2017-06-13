<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue Boilerplate</title>
        @section('styles')
        @show
    </head>
    <body>
        @yield('content')
        @section('scripts')
        @show
    </body>
</html>
