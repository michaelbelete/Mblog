@extends('layout.app')

@section('content')

<script src="{{ asset('js/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
    <div class="row container">
        <div class="col-md-12">
            <h3><a href="/posts" class="btn btn-outline-success mr-3">Go back</a>Edit Post</h3>
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter you title here" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="title">Body</label>
                    <textarea name="body" id="body" class="form-control" cols="30" rows="10" placeholder="enter you body here...">
                        {{ $post->body }}
                    </textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary"><b>Edit Post</b></button>
                </div>
            </form>
        </div>
    </div>
<script>
tinymce.init({
        selector: "#body",
        height: '350px',
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality emoticons template paste textcolor"
       ],
       toolbar: "insertfile | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image  preview media fullpage  forecolor backcolor emoticons",

    });
</script>
@endsection
