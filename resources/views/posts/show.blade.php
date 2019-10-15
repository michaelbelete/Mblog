@extends('layouts.app')

@section('content')
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
@guest
<div class="alert alert-info text-center mt-2">
    <p>Please <a href="/login">login</a> or <a href="/register">signup</a> to comment</p>
</div>
@else

<div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Comments</h6>
    @if(count($comments) > 0)
        @foreach($comments as $comment)
            <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16dc586de84%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16dc586de84%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;"> 
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Full Name</strong>
                    </div>
                </div>
            </div>
        @endforeach
    @else
</div>
    <!-- comment section -->
    <div class="card mt-4">
        <div class="card-body">

            <div class="mb-2">
                <p class="alert alert-info text-center">
                    No comment
                </p>
            </div>
            @endif
            <form method="post" action="/comments">
                @csrf
                <div class="form-group">
                    <label for="comment">Your Comment</label>
                    <textarea name="comment" class="form-control" rows="5" style="resize:none;"></textarea>
                </div>
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Comment</button>
                </div>
            </form>
        </div>
    </div>
    <!-- comment section -->
@endguest
@endsection
