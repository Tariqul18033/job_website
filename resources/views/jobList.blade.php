@extends('layout')

@section('content')
    <h1>Job List</h1>
    <h2>{{$listing["name"]}}</h2>
    <p>{{$listing["description"]}}</p>

@endsection