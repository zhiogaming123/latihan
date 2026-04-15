@extends('master')

@section('content')
<div class="glass">

    <h3 class="fw-bold mb-4">✏️ Edit User</h3>

    <form action="{{route('user.update')}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                    value="{{ $user->name }}" required>
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