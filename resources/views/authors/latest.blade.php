@extends('layouts.app')

@section('title')
Latest authors
@endsection

@section('content')


<h1> Latest Authors</h1>

@foreach ($authors as $author)

<hr>
<h2>{{ $author->id }} - {{ $author->name }}</h2>
<p>{{ $author->bio }}</p>
<small>{{ $author->created_at }}</small>

@endforeach
@endsection

