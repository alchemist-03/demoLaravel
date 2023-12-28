@extends('layouts.base')

@section('title','Create new flight')


@section('main')
    <div class="mt-5">

        <form action="{{route('flights.store')}}" method="post">
            @csrf
            <h2 class="text-center text-success">Add new Flight</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Aircraft ID</label>
                <select name="Aircraft_ID" class="form-select">
                    @foreach($aircraftsId as $airId)
                        <option value="{{$airId->Aircraft_ID}}">{{$airId->Aircraft_ID}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Departure airport</label>
                <input type="text" class="form-control" name="Departure_Airport" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Arrival airport</label>
                <input type="text" class="form-control" name="Arrival_Airport" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Departure time</label>
                <input type="datetime-local" class="form-control" name="Departure_Time" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Arrival time</label>
                <input type="datetime-local" class="form-control" name="Arrival_Time" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Flight duration</label>
                <input type="time" class="form-control" name="Flight_Duration" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('flights.index')}}" type="button" class="btn btn-outline-dark">Cancel</a>
        </form>
    </div>







@endsection






