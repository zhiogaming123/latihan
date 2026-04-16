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

    <h3 class="fw-bold mb-4">✏️ Edit Attraction</h3>

    <form action="{{ route('attraction.update', $attraction->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- DESTINATION --}}
        <div class="mb-3">
            <label class="form-label">Destination</label>

            <select name="destination_id"
                    class="form-control @error('destination_id') is-invalid @enderror"
                    required>

                <option value="">Select Destination</option>

                @foreach ($destinations as $destination)
                    <option value="{{ $destination->id }}"
                        {{ old('destination_id', $attraction->destination_id) == $destination->id ? 'selected' : '' }}>
                        {{ $destination->name }}
                    </option>
                @endforeach

            </select>

            @error('destination_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- NAME --}}
        <div class="mb-3">
            <label>Name</label>
            <input type="text"
                   name="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name', $attraction->name) }}"
                   required>

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- DESCRIPTION --}}
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description"
                      class="form-control"
                      rows="3"
                      required>{{ old('description', $attraction->description) }}</textarea>
        </div>

        {{-- BUTTON --}}
        <div class="d-flex justify-content-between mt-4">
            <a href="/attraction" class="btn btn-secondary btn-custom">← Back</a>
            <button type="submit" class="btn btn-success btn-custom">
                Update Attraction
            </button>
        </div>

    </form>

</div>

@endsection