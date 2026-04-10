@extends('master')

@section('content')
<div class="container mt-4">
    <form action="/destinations" method="post">
        @csrf

        <div class="form-floating mb-3">    
            <input type="text" class="form-control" id="name" placeholder="Asia Heritage" name="name">
            <label for="name">Nama Destinasi</label>
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" class="form-control" placeholder="Deskripsi" style="height: 100px"></textarea>
            <label>Deskripsi</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="location" placeholder="Pekanbaru" name="location">
            <label for="location">Lokasi</label>
        </div>

        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="ticket_price" placeholder="100000" name="ticket_price">
            <label for="ticket_price">Harga Tiket</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="working_hours" placeholder="08.00 - 17.00" name="working_hours">
            <label for="working_hours">Jam Operasional</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="working_days" placeholder="Senin-Minggu" name="working_days">
            <label for="working_days">Hari Operasional</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection