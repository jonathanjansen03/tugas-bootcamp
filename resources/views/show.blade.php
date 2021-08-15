@extends('template.template')

@section('content')
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Author</th>
            <th scope="col" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $i)
        <tr>
            <th scope="row">{{$i->id}}</th>
            <td>
                <a href="{{route('showDetails', $i->id)}}">{{$i->title}}</a>
            </td>
            <td>{{$i->content}}</td>
            <td>{{$i->author}}</td>
            <td>
            <div class="d-flex justify-content-around">
                <a type="button" href="{{route('editArticle', $i->id)}}" class="btn btn-success ">Update</a>
                <a type="button" href="{{route('deleteArticle', $i->id)}}" class="btn btn-danger">Delete</a>
            </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection