@extends('layout')

@section('content')
    <h1>{{ $heading }}</h1>
    @if (count($listing) < 10)
        <p>no listing found</p>
    @endif

    <h2>{{ $listing['id'] }}</h2>
    <h2>{{ $listing['title'] }}</h2>
@endsection
