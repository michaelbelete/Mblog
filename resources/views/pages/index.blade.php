@extends('layout.app')

@section('content')
    <div class="jumbotron text-center bg-transparent border-bottom">
        <div class="container">
            <img src="{{ asset('img/mblog.png')}}" alt="my logo" width="150" height="150" class="mb-4">
            <h1 class="jumbotron-heading">Welcome to {{ config("app.name","Mblog")}}</h1>
            <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste id molestiae laborum. Quo, modi quibusdam dignissimos blanditiis perspiciatis deserunt dolore. Porro minus harum cumque accusantium nostrum consequatur, magnam qui voluptatum.</p>
            <p class="lead text-muted">
                <a class="btn btn-outline-primary btn-lg my-2" href="/login" role="button">Login</a>
                <a class="btn btn-outline-success btn-lg my-2" href="/register" role="button">Sign Up</a>
            </p>
        </div>
    </div>
@endsection

