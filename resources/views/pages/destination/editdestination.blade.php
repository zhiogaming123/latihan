@extends('master')

@section('content')
<div class="glass">

    <h3 class="fw-bold mb-4">✏️ Edit Destination</h3>

    <form action="{{route('destinations.update',$destination->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                    value="{{ $destination->name }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Price</label>
                <input type="number" name="ticket_price" class="form-control"
                    value="{{ $destination->ticket_price }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $destination->description }}</textarea>
        </div>
 
        <div class="mb-3">
            <label>Location</label>
            <input type="text" name="location" class="form-control"
                value="{{ $destination->location }}" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Working Hours</label>
                <input type="text" name="working_hours" class="form-control"
                    value="{{ $destination->working_hours }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Working Days</label>
                <input type="text" name="working_days" class="form-control"
                    value="{{ $destination->working_days }}">
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="/destinations" class="btn btn-secondary btn-custom">← Back</a>
            <button type="submit" class="btn btn-success btn-custom">
                Update Destination
            </button>
        </div>

    </form>

</div>
@endsection