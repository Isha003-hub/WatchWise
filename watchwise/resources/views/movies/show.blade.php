@extends('layout')

@section('content')
    <h1>{{ $movie->title }} ({{ $movie->release_year }})</h1>
    <p><strong>Genre:</strong> {{ $movie->genre }}</p>
    <p><strong>Network:</strong> {{ $movie->network }}</p>
    <p><strong>Rating:</strong> {{ $movie->rating }}/10</p>
    <p><strong>Description:</strong> {{ $movie->description }}</p>
    <p><strong>Cast:</strong> {{ $movie->cast }}</p>

    <br><a href="{{ route('reviews.create', ['movie_id' => $movie->id]) }}">+ Add Review</a>

    <h3>Reviews:</h3>
    <ul>
        @forelse ($movie->reviews as $review)
            <li>
                <strong>{{ $review->user_name }}:</strong>
                {{ $review->review_text }} ({{ $review->rating }}/5)
            </li>
        @empty
            <li>No reviews yet.</li>
        @endforelse
    </ul>

    <br><a href="{{ route('movies.index') }}">← Back to Movies</a>
@endsection
