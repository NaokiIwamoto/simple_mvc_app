@extends('master')

@section('content')
<a href="/books">Back</a>
<div>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label for="">Title:</label>
        <input type="text" name="title">

        <label for="">Description:</label>
        <input type="text" name="description">

        <input type="submit" value="Create">

    </form>
</div>
@endsection