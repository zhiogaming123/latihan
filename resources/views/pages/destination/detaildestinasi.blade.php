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
                </div>

                <!-- ISI -->
                <div class="card-body p-4">

                    <h2 class="fw-bold mb-1">{{ $destination->name }}</h2>
                    <p class="text-muted mb-3">📍 {{ $destination->location }}</p>

                    <div class="row g-3">

                        <div class="col-6">
                            💰 <b>Ticket Price</b><br>
                            Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}
                        </div>

                        <div class="col-6">
                            ⏳ <b>Description</b><br>
                            {{ $destination->description }}
                        </div>

                        <div class="col-6">
                            📅 <b>Working Days</b><br>
                            {{ $destination->working_days }}
                        </div>

                        <div class="col-6">
                            ⏰ <b>Working Hours</b><br>
                            {{ $destination->working_hours }}
                        </div>

                    </div>

                    <a href="/destinations" class="btn btn-primary w-100 mt-4">
                        ← Kembali ke List
                    </a>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection