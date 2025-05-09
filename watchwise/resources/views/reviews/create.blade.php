@extends('layout')

@section('content')
    <h1>Add a New Review</h1>

    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf

        <label for="movie_id">Movie:</label>
        <select name="movie_id" required>
            @foreach ($movies as $movie)
                <option value="{{ $movie->id }}">{{ $movie->title }}</option>
            @endforeach
        </select><br><br>

        <label for="user_name">Your Name:</label>
        <input type="text" name="user_name" required><br><br>

        <label for="review_text">Review:</label><br>
        <textarea name="review_text" rows="4" required></textarea><br><br>

        <label for="rating">Rating (1–5):</label>
        <input type="number" name="rating" step="0.1" min="1" max="5" required><br><br>

        <input type="submit" value="Submit Review">
    </form>
@endsection
