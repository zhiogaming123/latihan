@extends('master')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="glass">

    <h3 class="fw-bold mb-4">✏️ Edit Destination</h3>

    <form action="{{route('destinations.update',$destination->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control"@error('name') is-invalid @enderror" value="{{ old('name', $destination->name) }}" required>
                @error('name')
                <div class="invalid-feedback">{{$message}}</div>    
                @enderror
                   
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

        @if($destination->image)
    <div class="mb-3">
        <label>Gambar Saat Ini</label><br>
        <img src="{{ asset('images/destinations/' . $destination->image) }}"
             width="150"
             style="border-radius:10px; margin-top:10px;">
    </div>
@endif

<div class="mb-3">
    <label>Ganti Gambar (opsional)</label>
    <input type="file" name="image" class="form-control">
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