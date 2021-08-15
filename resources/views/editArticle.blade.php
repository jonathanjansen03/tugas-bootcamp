@extends('template.template')

@section('content')
<form action="{{route('updateArticle', $article->id)}}" method="post" enctype="multitype/form-data">
    @csrf
    @method('patch')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$article->title}}">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="Content">{{$article->content}}</textarea>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" name="author" class="form-control" id="author" placeholder="Author" value="{{$article->author}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection