@extends('master')  

@section('content')

<div class="container py-5 mt-5">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card border-0"> 

    <!-- GAMBAR -->
    <div class="position-relative">
        <img src="https://www.wandernesia.com/wp-content/uploads/2020/01/Tugu-Iora-@soalpadang-768x576.jpg"
             class="w-100"
             style="height:300px; object-fit:cover;">

        <div style="position:absolute; inset:0; background:linear-gradient(to top, rgba(0,0,0,0.5), transparent);"></div>
    </div>

    <!-- ISI -->
    <div class="card-body p-4">

        <h2 class="fw-bold mb-1">{{ $destination['name'] }}</h2>
        <p class="text-muted mb-3">📍 {{ $destination['location'] }}</p>


        <!-- INFO GRID -->
        <div class="row g-3">

            <div class="col-6">
                <div class="info-box">
                    💰 <b>ticket price</b><br>
                    Rp {{ number_format($destination['ticket_price'], 0, ',', '.') }}
                </div>
            </div>

            <div class="col-6">
                <div class="info-box">
                    ⏳ <b>deskripsi</b><br>
                    {{ $destination['description'] }}
                </div>
            </div>

            <div class="col-6">
                <div class="info-box">
                    🚗 <b>working days</b><br>
                    {{ $destination['working_days'] }}
                </div>
            </div>

            <div class="col-6">
                <div class="info-box">
                    🏨 <b>working hours</b><br>
                    {{ $destination['working_hours'] }}
                </div>
            </div>

        </div>

        <!-- FASILITAS -->
        <div class="mt-4">
            <h5 class="fw-semibold mb-3">Fasilitas</h5>

        
        </div>

        <!-- RATING -->
        <div class="mt-4 rating-box">
            ⭐⭐⭐⭐⭐ <br>
            Rating: {{ $destination['rating'] }} / 5
        </div>

        <!-- BUTTON -->
        <a href="/" class="btn btn-modern w-100 mt-4">
            ← Kembali ke Home
        </a>

    </div>
</div>

        </div>
    </div>

</div>

@endsection