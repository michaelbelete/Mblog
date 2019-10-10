@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="jumbotron text-center bg-transparent border-right">
            <div class="container">
                    <img src="{{ asset('img/mblog.png')}}" alt="my logo" width="150" height="150" class="mb-4">
                    <h1 class="jumbotron-heading">Hello, {{ Auth::user()->name}}</h1>
                    <p class="lead text-muted">Welcome to mblog</p>
                    <p class="lead text-muted">
                        <a class="btn btn-outline-primary btn-lg my-2" href="/posts/create" role="button">Create Post</a>
                        <a class="btn btn-outline-success btn-lg my-2" href="/posts" role="button">Latest Posts</a>
                    </p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h1 class="pb-4 text-center">Your Posts</h1>
        <div class="row pl-4">
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                    <img data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16da0ec64b3%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16da0ec64b3%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" class="card-img-top" style="height: 125px; width: 100%; display: block;">
                    <div class="card-body">
                        <h3 class="card-heading">hello world</h3>
                        <p class="card-text">mike belete</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group"><a href="posts/8" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="posts/8/edit" class="btn btn-sm btn-outline-secondary">Edit</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

