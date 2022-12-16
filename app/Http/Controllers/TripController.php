<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Place;
use App\Trip;
use Illuminate\Http\Request;
use App\Ticket;
use Exception;
use Illuminate\Support\Facades\DB;


class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = DB::table('trips')->whereDate('departure_time', '>', date("Y-m-d"));
        if($request->has('from')){
            $trips = $query->where('departure_place', $request->from);
        }
        if($request->has('to')){
            $trips = $query->where('arrival_place', $request->to);
        }
        $trips = $query->get();

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
        foreach(Place::where("id_trip",$trip->id)->get() as $place)
            $place->delete();
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
        DB::beginTransaction();
        try{
        $trip = Trip::create([
            'departure_place' => request('departure_place'),
            'arrival_place' => request('arrival_place'),
            'departure_time' => request('departure_time'),
            'arrival_time' => request('arrival_time'),
            'id_bus' => request('id_bus'),
        ]);
        $bus = Bus::where("id",request("id_bus"))->first();
        // dd($bus);
        for($i=0; $i<$bus->place_count;$i++){
            $koeff = rand(100, 200)/100;
            $place = Place::create([
                'place_number'=> $i+1,
                'status' => "Свободно",
                'id_trip' => $trip->id,
                'price' => $koeff*800/$bus->place_count,
            ]);

            Ticket::create([
                'id_place' =>  $place->id,
                'status' => "Не куплен",
                'price' => $koeff*800/$bus->place_count,
            ]);
        }
        DB::commit();
    }
    catch(Exception $exception)
    {
        DB::rollback();
        return $exception;
    }


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

    }
}
