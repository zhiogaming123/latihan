@extends('master')

@section('content')
<div class="glass">

    <h3 class="fw-bold mb-4">✏️ Edit Attraction</h3>

    <form action="{{route('attraction.update',$attraction->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                    value="{{ $attraction->name }}" required>
            </div>

         <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $attraction->description }}</textarea>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="/attraction" class="btn btn-secondary btn-custom">← Back</a>
            <button type="submit" class="btn btn-success btn-custom">
                Update attraction
            </button>
        </div>
    </form>
</div>       
 @endsection           