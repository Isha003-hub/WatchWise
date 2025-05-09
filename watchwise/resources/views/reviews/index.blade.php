@extends('layout')

@section('content')
    <h1>All Reviews</h1>
    <ul>
        @foreach ($reviews as $review)
            <li>
                <strong>{{ $review->user_name }}</strong> on <em>{{ $review->movie->title }}</em><br>
                "{{ $review->review_text }}" — Rated: {{ $review->rating }}/5
                <br><br>
                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
                <hr>
            </li>
        @endforeach
    </ul>
@endsection
