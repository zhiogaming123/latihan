@extends('master')

@section('content')

<!-- POPULAR DESTINATION -->
<div class="glass mt-4">
    <h3 class="mb-4">🌍 Popular Destinations</h3>

    <div class="row">
        @foreach($destinations as $d)
        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow">

                <img src="{{ asset('images/destinations/' . $d->image) }}" 
     class="card-img-top"
     style="height:200px; object-fit:cover;">

                <div class="card-body">
                    <h5>{{ $d->name }}</h5>
                    <p class="text-muted">{{ $d->location }}</p>

                    <p>Rp {{ number_format($d->ticket_price,0,',','.') }}</p>

                    <a href="{{{ route("destinations.show",$d->id) }}}" 
                       class="btn btn-primary btn-sm">
                        View Detail
                    </a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection