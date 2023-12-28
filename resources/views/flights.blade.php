@extends('layouts.base')

@section('title','Flights page')


@section('main')
   <div class="mt-5">
       <a href="{{route('flights.create')}}" class="btn btn-success float-end ">Add new flight</a>

       <div id="notify-box">

       </div>

       <table class="table">
           <thead>
           <tr>
               <th scope="col">#</th>
               <th scope="col">Aircraft ID</th>
               <th scope="col">Departure airport</th>
               <th scope="col">Arrival airport</th>
               <th scope="col">Departure time</th>
               <th scope="col">Arrival time</th>
               <th scope="col">Flight duration</th>
               <th scope="col">Actions</th>
           </tr>
           </thead>
           <tbody>
           @foreach($flights as $key => $flight)
               <tr>
                   <th scope="row">{{$key}}</th>
                   <td>{{$flight->Aircraft_ID}}</td>
                   <td>{{$flight->Departure_Airport}}</td>
                   <td>{{$flight->Arrival_Airport}}</td>
                   <td>{{$flight->Departure_Time}}</td>
                   <td>{{$flight->Arrival_Time}}</td>
                   <td>{{$flight->Flight_Duration}}</td>
                   <td style="display: flex;align-items: center;justify-content: space-between">
                       <a href="{{route('flights.show',$flight)}}">
                           <i class="fa-solid fa-eye"></i>
                       </a>
                       <a href="{{route('flights.edit',$flight)}}"><i class="fa-solid fa-pen"></i></a>

                       <form action="{{ route('flights.destroy',$flight) }}" method="POST">
                           @csrf
                           @method('DELETE')
                           <button class="btn btn-delete" item-name ="{{$flight->Aircraft_ID}}" ><i class="fa-solid fa-trash-can"></i></button>
                       </form>
                   </td>

               </tr>
           @endforeach
           </tbody>
       </table>

   </div>

   <div class="modal fade" tabindex="-1" id="deleteModal">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Confirm Delete</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <p></p>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary" id="deleteConfirm">OK</button>
               </div>
           </div>
       </div>
   </div>







@endsection







