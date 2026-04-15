@extends('master')

@section('content')
<div class="container mt-4">
    <form action="{{route('destinations.store')}}" method="post">
        @csrf

        <div class="form-floating mb-3">    
            <input type="text" class="form-control" name="name" placeholder="Asia Heritage">
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

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection