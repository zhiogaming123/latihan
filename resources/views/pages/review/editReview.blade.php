@extends('master')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="glass">

    <h3 class="fw-bold mb-4">✏️ Edit Review</h3>

    <form action="{{ route('review.update', $review->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- ATTRACTION --}}
        <div class="mb-3">
            <label>Attraction</label>

            <select name="attraction_id"
    class="form-control @error('attraction_id') is-invalid @enderror">

    @foreach ($attraction as $a)
        <option value="{{ $a->id }}"
            {{ old('attraction_id', $review->attraction_id) == $a->id ? 'selected' : '' }}>
            {{ $a->name }}
        </option>
    @endforeach

</select>

@error('attraction_id')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
        </div>

        {{-- REVIEWER --}}
        <div class="mb-3">
            <label>Reviewer Name</label>

            <input type="text"
                name="reviewer_name"
                class="form-control @error('reviewer_name') is-invalid @enderror"
                value="{{ old('reviewer_name', $review->reviewer_name) }}">

            @error('reviewer_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- COMMENTS --}}
        <div class="mb-3">
            <label>Comments</label>

            <textarea name="comments"
                class="form-control @error('comments') is-invalid @enderror">
                {{ old('comments', $review->comments) }}
            </textarea>

            @error('comments')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="/review" class="btn btn-secondary">← Back</a>
            <button class="btn btn-success">Update</button>
        </div>

    </form>

</div>
@endsection