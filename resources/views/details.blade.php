@extends('template.template')

@section('content')
<h1 class="text-center">Title: {{$article->title}}</h1>
<h1 class="text-center">Content: {{$article->content}}</h1>
<h1 class="text-center">Author: {{$article->author}}</h1>
@endsection