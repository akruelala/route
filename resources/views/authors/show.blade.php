@extends('layouts.app')

@section('title')
Show author - {{ $author->id }}
@endsection

@section('content')

<h1> show author - {{ $author->id }}</h1>

<hr>
<h3>{{ $author->name }}</h3>
<p>{{ $author->bio }}</p>


<a href="{{ route('allAuthors') }}">Back</a>

@endsection




