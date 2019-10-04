<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','Mblog')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    @include('inc.navbar');
    <main role="main">
        <div class="container pt-2">
            @yield('content')
        </div>
    </main>
    <script>
        $(document).ready(function(){
            alert("mike");
        });
    </script>
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    </body>
</html>

