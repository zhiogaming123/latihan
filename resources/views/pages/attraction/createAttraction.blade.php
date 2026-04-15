@extends('master')

@section('content')
<div class="container mt-4">
    <form action="{{route('attraction.store')}}" method="post" class="form-floating">
        @csrf

        <div class="form-floating mb-3">    
            <input type="text" class="form-control" name="name" placeholder="Asia Heritage">
            <label>Nama </label>
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" class="form-control" style="height: 100px"></textarea>
            <label>Deskripsi</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
</div>   
@endsection        