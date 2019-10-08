@extends('layout.app')

@section('content')
    <div class="row container">
        <div class="col-md-12">
            <h1>Create Post</h1>
            <form action="/posts" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter you title here">
                </div>
                <div class="form-group">
                    <label for="title">Body</label>
                    <textarea name="body" class="form-control" cols="30" rows="10" placeholder="enter you body here..."></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
