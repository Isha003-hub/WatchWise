@extends('layout')

@section('content')
    <h1>Add New Movie</h1>

    <form action="{{ route('movies.store') }}" method="POST">
        @csrf

        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Genre:</label><br>
        <input type="text" name="genre" required><br><br>

        <label>Release Year:</label><br>
        <input type="number" name="release_year" required><br><br>

        <label>Network:</label><br>
        <input type="text" name="network"><br><br>

        <label>Cast:</label><br>
        <input type="text" name="cast"><br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="3"></textarea><br><br>

        <label>Rating (1–10):</label><br>
        <input type="number" step="0.1" name="rating"><br><br>

        <label>Poster URL:</label><br>
        <input type="text" name="poster_url"><br><br>

        <input type="submit" value="Add Movie">
    </form>
@endsection
