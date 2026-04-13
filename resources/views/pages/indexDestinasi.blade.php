@extends('master')

@section('content')
<div class="glass">

    {{-- ALERT SUCCESS --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">

    <h4>Destination List</h4>

    <form method="GET" action="/destinations" class="d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Search...">
        <button class="btn btn-secondary">Search</button>
    </form>

    <a href="/destinations/create" class="btn btn-success">
        Add Destination
    </a>

</div> 
    
    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Working Hours</th>
                    <th>Working Days</th>
                    <th>Actions</th>
                </tr>   
            </thead>
            <tbody>
                @foreach($destination as $d)
                <tr>
                    <td>
                        <a href="{{ route('detaildestinasi.show', $d->id) }}" class="text-warning fw-bold">
                            {{ $d->id }}
                        </a>
                    </td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->description }}</td>
                    <td>{{ $d->location }}</td>
                    <td>Rp {{ number_format($d->ticket_price,0,',','.') }}</td>
                    <td>{{ $d->working_hours }}</td>
                    <td>{{ $d->working_days }}</td>
                    <td>
                        <div class="d-flex gap-2 justify-content-center">

                            {{-- DELETE --}}
                            <form action="/destination/{{$d->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm btn-custom"
                                    onclick="return confirm('Yakin hapus {{$d->name}}?')">
                                    Delete
                                </button>
                            </form>

                            {{-- EDIT --}}
                            <a href="/destination/{{$d->id}}/edit" 
                               class="btn btn-warning btn-sm btn-custom">
                                Edit
                            </a>
                        
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-3 d-flex justify-content-center">
        {{ $destination->links('pagination::bootstrap-5')}}
    </div>

</div>
@endsection 

@push('scripts')
<script>
    let alertElement = document.querySelector('.alert');

    if (alertElement){
        setTimeout(() => {
            alertElement.style.transition = "opacity 1s ease-out";
            alertElement.style.opacity = "0";

            setTimeout(() => {
                alertElement.remove();
            }, 1000);

        }, 3000); // tampil 3 detik
    }
</script>
@endpush