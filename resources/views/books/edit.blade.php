@extends('master')

@section('content')
    <a href="/books">Back</a>
    <div>
        <form action="/book/{{ $book->id }}/update" method="POST">
            @csrf
            <label>Title:</label>
            <input type="text" name="title" value="{{ $book->title }}">

            <label>Description:</label>
            <input type="text" name="description" value="{{ $book->description }}">

            <input type="submit" value="Submit">

        </form>
    </div>
@endsection