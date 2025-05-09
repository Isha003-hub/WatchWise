@extends('layout')

@section('content')
    <h1>All Movies</h1>

    <a href="{{ route('movies.create') }}">+ Add New Movie</a><br><br>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <strong>{{ $movie->title }}</strong> ({{ $movie->release_year }}) <br>
                Genre: {{ $movie->genre }}<br>
                Network: {{ $movie->network }}<br>
                Rating: {{ $movie->rating }}/10<br>
                Description: {{ $movie->description }}<br>
                Cast: {{ $movie->cast }}<br><br>

                <a href="{{ route('movies.show', $movie->id) }}">View Details</a><br><br>


                <a href="{{ route('movies.edit', $movie->id) }}">Edit</a><br><br>

                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>

                <br><strong>Reviews:</strong><br>
                <ul>
                    @foreach ($movie->reviews as $review)
                        <li>
                            <strong>{{ $review->user_name }}:</strong>
                            {{ $review->review_text }} ({{ $review->rating }}/5)
                        </li>
                    @endforeach
                </ul>
                <hr>
            </li>
        @endforeach
    </ul>
@endsection
