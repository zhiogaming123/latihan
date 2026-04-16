@extends('master')

@section('content')
<div class="glass">

    <h3 class="fw-bold mb-4">✏️ Edit pauling</h3>

    <form action="{{route('pauling.update',$pauling->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                    value="{{ $pauling->name }}" required>
            </div>

         <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $pauling->description }}</textarea>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="/pauling" class="btn btn-secondary btn-custom">← Back</a>
            <button type="submit" class="btn btn-success btn-custom">
                Update pauling
            </button>
        </div>
    </form>
</div>       
 @endsection           