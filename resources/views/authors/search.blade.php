@extends('layouts.app')

@section('title')
search results
@endsection

@section('content')


<h1> Search resuls</h1>

@foreach ($authors as $author)

<hr>
<h2>{{ $author->name }}</h2>
<p>{{ $author->bio }}</p>
    

@endforeach

@endsection






