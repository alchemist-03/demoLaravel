@extends('layouts.base')

@section('title','Create new flight')


@section('main')
    <div class="mt-5">

        <form action="{{route('flights.update',$flight)}}" method="post">
            @csrf
            @method('PUT')
            <h2 class="text-center text-success">Add new Flight</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Aircraft ID</label>
                <select name="Aircraft_ID" class="form-select">
                    @foreach($aircraftsId as $airId)


                        <option
                            @if($airId->Aircraft_ID === $flight->Aircraft_ID) selected @endif
                            value="{{$airId->Aircraft_ID}}">{{$airId->Aircraft_ID}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Departure airport</label>
                <input type="text" class="form-control" value="{{$flight->Departure_Airport}}" name="Departure_Airport" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Arrival airport</label>
                <input type="text" class="form-control" value="{{$flight->Arrival_Airport}}" name="Arrival_Airport" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Departure time</label>
                <input type="datetime-local" class="form-control" value="{{$flight->Departure_Time}}" name="Departure_Time" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Arrival time</label>
                <input type="datetime-local" class="form-control" value="{{$flight->Arrival_Time}}" name="Arrival_Time" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Flight duration</label>
                <input type="time" class="form-control" value="{{$flight->Flight_Duration}}" name="Flight_Duration" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('flights.index')}}" type="button" class="btn btn-outline-dark">Cancel</a>
        </form>
    </div>







@endsection






