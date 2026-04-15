@extends('master')
@section( 'content')
    <h1>User Details</h1>
    <p>Name: {{$destinations->name}}</p>
    <p>Deskription: {{$user->Deskription}}</p>
    <p>Location: {{$destinations->Location}}</p>
    <p>Price: {{$destinations->Price}}</p>
    <p>Working Hours: {{$destinations->Working Hours}}</p>
    <p>Working Days: {{$destinations->Working Days}}</p>
@endsection  