<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::all();
        return view('tripsPage', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trips_create');
    }

    public function delete(Trip $trip)
    {
        $trip->delete();
        return redirect()->route('trips.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Trip::create([
            'departure_place' => request('departure_place'),
            'arrival_place' => request('arrival_place'),
            'departure_time' => request('departure_time'),
            'arrival_time' => request('arrival_time'),
            'id_bus' => request('id_bus'),
        ]);

        return redirect() ->route('trips.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
         return view('trips_show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        $trip->departure_place= request('departure_place');
        $trip->arrival_place = request('arrival_place');
        $trip->departure_time = request('departure_time');
        $trip->arrival_time = request('arrival_time');
        $trip->id_bus = request('id_bus');
        $trip->save();

        return redirect()->route('trips.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
