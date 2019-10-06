@extends('layout.app')

@section('content')
<div class="jumbotron text-center bg-transparent border-bottom">
    <div class="container">
        <h1 class="jumbotron-heading">Welcome to {{ config("app.name","Mblog")}}</h1>
        <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste id molestiae laborum. Quo, modi quibusdam dignissimos blanditiis perspiciatis deserunt dolore. Porro minus harum cumque accusantium nostrum consequatur, magnam qui voluptatum.</p>
        <p class="lead text-muted">
            <a class="btn btn-primary btn-lg my-2" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg my-2" href="/register" role="button">Sign Up</a>
        </p>
    </div>
</div>
@endsection
