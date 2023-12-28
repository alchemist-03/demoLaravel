@extends('layouts.base')

@section('title','Create new flight')


@section('main')
    <div class="mt-5">

            <h1>{{ $flight->Aircraft_ID }}</h1>
            <p>{{ $flight->Departure_Airport}}</p>
            <a href="{{ route('flights.index') }}">Back to Flights</a>

    </div>

@endsection







