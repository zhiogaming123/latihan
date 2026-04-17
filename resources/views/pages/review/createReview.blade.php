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

<div class="container mt-4">

    <form action="{{ route('review.store') }}" method="post">
        @csrf

        {{-- ATTRACTION --}}
        <div class="mb-3">
            <label class="form-label">Attraction</label>

           <select name="attraction_id"
    class="form-control @error('attraction_id') is-invalid @enderror">

    <option value="">Select Attraction</option>

    @foreach($attraction as $a)
        <option value="{{ $a->id }}"
            {{ old('attraction_id') == $a->id ? 'selected' : '' }}>
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
                value="{{ old('reviewer_name') }}"
                required>

            @error('reviewer_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- COMMENTS --}}
        <div class="mb-3">
            <label>Comments</label>
            <textarea name="comments"
                class="form-control @error('comments') is-invalid @enderror"
                rows="4">{{ old('comments') }}</textarea>

            @error('comments')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection