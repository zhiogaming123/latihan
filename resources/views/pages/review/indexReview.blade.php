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

    <h4>review List</h4>

    <form method="GET" action="{{route('review.index')}}" class="d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Search...">
        <button class="btn btn-secondary">Search</button>
    </form>

    <a href="/review/create" class="btn btn-success">
        Add review
    </a>

</div> 
    
    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Attraction</th>
                    <th>Reviewer_Name</th>
                    <th>Comments</th>
                    <th>Actions</th>
                </tr>   
            </thead>
            <tbody>
@foreach($review as $d)
<tr>
    <td>
        <a href="{{ route('review.show', $d->id) }}">
            {{ $d->id }}
        </a>
    </td>

    <td>{{ $d->attraction->name }}</td> {{-- RELASI --}}
    <td>{{ $d->reviewer_name }}</td>
    <td>{{ $d->comments }}</td>

    <td>
        <div class="d-flex gap-2">


            <form action="{{ route('review.delete',$d->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin hapus {{$d->reviewer_name}}?')">
                    Delete
                </button>
            </form>
             {{-- EDIT --}}
                            <a href="{{route('review.edit',$d->id)}}" 
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
        {{ $review->links('pagination::bootstrap-5')}}
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