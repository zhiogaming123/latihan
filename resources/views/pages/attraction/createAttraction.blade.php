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

    <form action="{{ route('attraction.store') }}" method="post">
        @csrf

        {{-- DESTINATION --}}
        <div class="mb-3">
            <label class="form-label">Destination</label>

            <select name="destination_id"
                    class="form-control @error('destination_id') is-invalid @enderror"
                    required>

                <option value="">Select Destination</option>

                @foreach($destinations as $destination)
                    <option value="{{ $destination->id }}"
                        {{ old('destination_id') == $destination->id ? 'selected' : '' }}>
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
            <label>Nama</label>
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="name"
                   value="{{ old('name') }}"
                   required>

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- DESCRIPTION --}}
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description"
                      class="form-control"
                      rows="4">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn-modern w-100 mt-4">
            Submit
        </button>

    </form>

</div>

@endsection