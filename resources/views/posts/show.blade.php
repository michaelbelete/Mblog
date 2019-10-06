@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h3 class="pb-3 font-bold border-bottom">
            <a href="/posts" class="btn btn-outline-success mr-3">Go Back</a>
            {{ $post->title}}
        </h3>
        <div class="blog-post">
            <small class="blog-post-meta mb-2">{{ $post->created_at}}</small>
            <p class="pt-2">{{ $post->body}}</p>
        </div>
    </div>
</div>
@endsection
