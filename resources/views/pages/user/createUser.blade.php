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
<div class="container mt-4">
    <form action="{{route('user.store')}}" method="post">
        @csrf

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" @error('name') is-invalid @enderror" value="{{old('name')}}" required>
            @error('name')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror


            <label>Nama User</label>
        </div>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email">
            <label>Email</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password">
            <label>Password</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection