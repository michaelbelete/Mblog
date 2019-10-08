@extends('layout.app')

@section('content')

<script src="{{ asset('js/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
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
                    <textarea name="body" id="body" class="form-control" cols="30" rows="10" placeholder="enter you body here..."></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Post</button>
                </div>
            </form>
        </div>
    </div>
<script>
tinymce.init({
        selector: "#body",
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality emoticons template paste textcolor"
       ],
       toolbar: "insertfile | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image  preview media fullpage  forecolor backcolor emoticons",

    });
</script>
@endsection
