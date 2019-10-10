@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 card p-4 mb-5">
        <h3 class="pb-3 font-bold border-bottom">
            <a href="/posts" class="btn btn-outline-success mr-3">Go Back</a>
            {{ $post->title}}
            <span class="float-right">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary mr-3">Edit</a>
                <form action="/posts/{{ $post->id}}" method="post" class="float-right">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-outline-danger mr-3">Delete</button>
                </form>
            </span>
        </h3>
        <div class="blog-post">
            <small class="blog-post-meta mb-2">{{ $post->created_at}}</small>
            <p class="pt-2">{!! $post->body !!}</p>
        </div>
    </div>
</div>
@endsection
