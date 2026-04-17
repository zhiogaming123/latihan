@extends('master')

@section('content')

<div class="container py-5 mt-5">
    <div class="card p-4">

        <h2>Review Detail</h2>

        <p><b>Attraction:</b> {{ $review->attraction->name ?? '-' }}</p>
        <p><b>Reviewer:</b> {{ $review->reviewer_name }}</p>
        <p><b>Comments:</b> {{ $review->comments }}</p>

        <p><b>Created:</b> {{ $review->created_at }}</p>
        <p><b>Updated:</b> {{ $review->updated_at }}</p>

        <a href="{{ route('review.index') }}" class="btn btn-primary mt-3">← Back</a>

    </div>
</div>

@endsection