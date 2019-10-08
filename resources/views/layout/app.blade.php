<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','Mblog')}}</title>
        <link rel="icon" href="{{ asset('img/mblog.png') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar');
        <main role="main">
            <div class="container pt-2">
                @include('inc.messages')
                @yield('content')
            </div>
        </main>
        <script src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>

