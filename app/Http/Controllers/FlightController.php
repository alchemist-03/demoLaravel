<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $flights = Flights::all();

        $flights = Flights::orderByDesc('Flight_ID')->get();

        return view('flights',compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aircraftsId = DB::select('select distinct Aircraft_ID from Flights');
//dd($aircraftsId);
        return view('add',compact('aircraftsId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->all();
       $savedFlight = Flights::create($data);
       return redirect()->route('flights.show',$savedFlight);
    }

    /**
     * Display the specified resource.
     */
    public function show(Flights $flight)
    {
        return view('detail',compact('flight'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flights $flight)
    {
        $aircraftsId = DB::select('select distinct Aircraft_ID from Flights');

        return view('edit', compact('flight','aircraftsId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flights $flight)
    {
        $data = $request->all();
        $flight->update($data);
        return redirect()->route('flights.show',$flight);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flights $flight)
    {
        $flight->delete();
        return redirect()->route('flights.index');
    }
}
