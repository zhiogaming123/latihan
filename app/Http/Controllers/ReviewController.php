<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');

        if ($keyword != '') {
            $review = Review::where('reviewer_name', 'LIKE', '%' . $keyword . '%')
                ->paginate(5);
        } else {
            $review = Review::orderBy('id')
                ->paginate(5);
        }

        return view('pages.review.indexReview', compact('review'));
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('pages.review.detailReview', compact('review'));
    }

    public function create()
    {
        $attraction = Attraction::all();
        return view('pages.review.createReview', compact('attraction'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'attraction_id' => 'required|exists:attractions,id',
            'reviewer_name' => 'required',
            'comments' => 'nullable',
        ]);

        Review::create($validated);

        return redirect()->route('review.index')->with('success', 'Review created');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $attraction = Attraction::all();

        return view('pages.review.editReview', compact('review', 'attraction'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'attraction_id' => 'required|exists:attractions,id',
            'reviewer_name' => 'required',
            'comments' => 'nullable',
        ]);

        $review = Review::findOrFail($id);
        $review->update($validated);

        return redirect('/review')->with('success', 'Review updated successfully.');
    }

    public function delete($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect('/review')->with('success', 'Review deleted successfully.');
    }
}