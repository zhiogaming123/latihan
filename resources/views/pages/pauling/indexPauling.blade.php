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

    <h4>pauling List</h4>

    <form method="GET" action="{{route('pauling.index')}}" class="d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Search...">
        <button class="btn btn-secondary">Search</button>
    </form>

    <a href="/pauling/create" class="btn btn-success">
        Add pauling
    </a>

</div> 
    
    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>   
            </thead>
            <tbody>
                @foreach($pauling as $d)
                <tr>
                    <td>
                        <a href="{{ route('pauling.show', $d->id) }}" class="text-warning fw-bold">
                            {{ $d->id }}
                        </a>
                    </td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->description }}</td>
                    <td>
                        <div class="d-flex gap-2 justify-content-center">
                            {{-- DELETE --}}
                            <form action="{{route('pauling.delete',$d->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm btn-custom"
                                    onclick="return confirm('Yakin hapus {{$d->name}}?')">
                                    Delete
                                </button>
                            </form>

                            {{-- EDIT --}}
                            <a href="{{route('pauling.edit',$d->id)}}" 
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
        {{ $pauling->links('pagination::bootstrap-5')}}
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