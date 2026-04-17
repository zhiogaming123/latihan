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

    <h3 class="fw-bold mb-4">✏️ Edit User</h3>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" @error('name') is-invalid @enderror" value="{{$user->name}}" required>
                @error('name')
                <div class="invalid-feedback">{{message}}</div>    
                @enderror
                    
            </div>

            <div class="col-md-6 mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control"
        value="{{ $user->email }}" required>
</div>

<div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control"
        value="{{ $user->password }}" required>
</div>
 

        <div class="d-flex justify-content-between mt-4">
            <a href="/users" class="btn btn-secondary btn-custom">← Back</a>
            <button type="submit" class="btn btn-success btn-custom">
                Update User
            </button>
        </div>

    </form>

</div>
@endsection