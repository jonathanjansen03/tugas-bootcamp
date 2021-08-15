@extends('template.template')

@section('content')
<div>
    <a href="{{route('articleForm')}}">Submit New Article</a>
</div>
<div>
    <a href="{{route('showArticles')}}">Show All Articles</a>
</div>
@endsection