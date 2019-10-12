@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="pb-3 font-bold border-bottom">
                    <a href="/posts" class="btn btn-outline-success mr-3">Go Back</a>
                    {{ $post->title}}
                    @if(!Auth::guest())
                        @if(Auth::user()->id == $post->user_id)
                            <span class="float-right">
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary mr-3">Edit</a>
                                <form action="/posts/{{ $post->id}}" method="post" class="float-right">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-outline-danger mr-3">Delete</button>
                                </form>
                            </span>
                       @endif
                    @endif
                </h3>
                <div class="blog-post">
                    <img src="/storage/cover_images/{{ $post->cover_image}}" class="card-img-top" alt="Heading Image" style="min-height:300px; min-width:300px; max-height:600px; max-width:100%;  display: block;">
                    <p class="pt-2">{!! $post->body !!}</p>
                </div>
            </div>
            <div class="card-footer">
                <small>Posted By <b>{{ $post->user->name }}</a></small>
                <small class="blog-post-meta mb-2 float-right">At {{ $post->created_at}}</small>
            </div>
        </div>
    </div>
</div>
@endsection
