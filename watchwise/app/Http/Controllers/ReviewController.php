<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Movie;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::with('movie')->get();
        return view('reviews.index', compact('reviews'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all(); // To populate the dropdown
        return view('reviews.create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        Review::create($request->validated());
        return redirect()->route('reviews.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */  public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
