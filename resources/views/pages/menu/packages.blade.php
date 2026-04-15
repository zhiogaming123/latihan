@extends('master')

@section('content')
<div class="glass">
    <h3 class="mb-4">📦 Travel Packages</h3>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card shadow border-0">
                <img src="https://source.unsplash.com/400x300/?bali" class="card-img-top">
                <div class="card-body">
                    <h5>Bali Holiday</h5>
                    <p>3 Hari 2 Malam ke Bali</p>
                    <p class="fw-bold text-primary">Rp 2.500.000</p>
                    <button class="btn btn-success btn-sm">Book Now</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow border-0">
                <img src="https://source.unsplash.com/400x300/?lombok" class="card-img-top">
                <div class="card-body">
                    <h5>Lombok Trip</h5>
                    <p>Paket wisata Lombok</p>
                    <p class="fw-bold text-primary">Rp 2.000.000</p>
                    <button class="btn btn-success btn-sm">Book Now</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow border-0">
                <img src="https://source.unsplash.com/400x300/?raja-ampat" class="card-img-top">
                <div class="card-body">
                    <h5>Raja Ampat</h5>
                    <p>Surga bawah laut Indonesia</p>
                    <p class="fw-bold text-primary">Rp 5.000.000</p>
                    <button class="btn btn-success btn-sm">Book Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection