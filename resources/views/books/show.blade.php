@extends('master')

@section('content')
<div>
   <h2> Book # {{ $book->id }}: {{ $book->title }} </h2>
   <p>{{ $book->description }}</p>
   <a href="/book/{{ $book->id }}/edit">Edit</a>
   <a href="/books">Back</a>
</div>
@endsection
