@extends('master')
@section( 'content')
    <h1>attraction Details</h1>
    <p>Name: {{$attraction->name}}</p>
    <p>Deskription: {{$attraction->Deskription}}</p>
    <p>Destinasi {{$attraction->destination}}</p>
    <br><br>
    <p>created at:{{$attraction->created_at}}</p>
    <p>update at:{{$attraction->updated}}</p>
    
@endsection  