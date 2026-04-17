@extends('master')
@section( 'content')
    <h1>review Details</h1>
    <p>Name: {{$review->name}}</p>
    <p>Comments: {{$review->Comments}}</p>
    <br><br>
    <p>created at:{{$review->created_at}}</p>
    <p>update at:{{$review->updated}}</p>  
@endsection  