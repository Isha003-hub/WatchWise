@extends('layout')

@section('content')
    <h1>Edit Movie: {{ $movie->title }}</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ $movie->title }}" required><br><br>

        <label>Genre:</label><br>
        <input type="text" name="genre" value="{{ $movie->genre }}" required><br><br>

        <label>Release Year:</label><br>
        <input type="number" name="release_year" value="{{ $movie->release_year }}" required><br><br>

        <label>Network:</label><br>
        <input type="text" name="network" value="{{ $movie->network }}"><br><br>

        <label>Cast:</label><br>
        <input type="text" name="cast" value="{{ $movie->cast }}"><br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="3">{{ $movie->description }}</textarea><br><br>

        <label>Rating (1–10):</label><br>
        <input type="number" step="0.1" name="rating" value="{{ $movie->rating }}"><br><br>

        <label>Poster URL:</label><br>
        <input type="text" name="poster_url" value="{{ $movie->poster_url }}"><br><br>

        <input type="submit" value="Update Movie">
    </form>
@endsection
