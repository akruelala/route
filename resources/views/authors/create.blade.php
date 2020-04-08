@extends('layouts.app')

@section('title')

Create Author
    
@endsection


@section('content')

    <form method="POST" action="{{ route('authors.store') }}" >

        @csrf

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="name">
        </div>

        <div class="form-group">
            <textarea class="form-control" rows="3" name="bio" placeholder="biography"></textarea>
        </div>
        
            <button type="submit" class="btn btn-primary">submit</button>

    </form>

@endsection
