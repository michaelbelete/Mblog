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
        <h3 class="pb-4 pl-2">Manage Your Posts</h3>
        <div class="row pl-4">
            <table class="table table-striped table-bordered dataTable no-footer">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title}}</td>
                            <td>
                                <a href="posts/{{ $post->id }}" class="btn btn-outline-secondary btn-sm">View</a>
                            </td>
                            <td>
                                <a href="posts/{{ $post->id }}/edit" class="btn btn-outline-primary btn-sm">Edit</a>
                            </td>
                            <td>
                                <form action="/posts/{{ $post->id}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-outline-danger mr-3 btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">There is no post</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

