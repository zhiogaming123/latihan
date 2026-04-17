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
   <form action="{{ route('destinations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">    
            <input type="text" class="form-control" name="name" placeholder="Asia Heritage" @error('name') is-invalid @enderror" value="{{old('name')}}" required>
            @error('name')
            <div class="ivalid-feedback">{{$message}}</div>    
            @enderror


            <label>Nama Destinasi</label>
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" class="form-control" style="height: 100px"></textarea>
            <label>Deskripsi</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="location" placeholder="Pekanbaru">
            <label>Lokasi</label>
        </div>

        <div class="form-floating mb-3">
            <input type="number" class="form-control" name="ticket_price" placeholder="100000">
            <label>Harga Tiket</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="working_hours" placeholder="08.00 - 17.00">
            <label>Jam Operasional</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="working_days" placeholder="Senin-Minggu">
            <label>Hari Operasional</label>
        </div>

        <div class="mb-3">
    <label>Gambar Destinasi</label>
    <input type="file" name="image" class="form-control">
</div>

        <button type="submit" class="btn-modern">Submit</button>
    </form>
</div>
@endsection
