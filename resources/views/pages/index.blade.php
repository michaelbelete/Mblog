@extends('layout.app')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-3">Welcome to {{ config("app.name","Mblog")}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste id molestiae laborum. Quo, modi quibusdam dignissimos blanditiis perspiciatis deserunt dolore. Porro minus harum cumque accusantium nostrum consequatur, magnam qui voluptatum.</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/about" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/services" role="button">Register</a>
        </p>
    </div>
</div>
@endsection
