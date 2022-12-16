<?php

namespace App\Http\Controllers;

use App\Place;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('trip')){
            $places = Place::where('id_trip', $request->trip)->where('status', 'Свободно')->get();
        }
        else $places = Place::all();
        return view('placesPage', compact('places'));
    }

    public function search(Request $request)
    {
        $s = $request ->s;
        $places = Place::where('status', 'LIKE', "%{$s}%")->orderBy('status')->paginate(10);

        return view('placesPage', compact('places'));
    }

    public function buy(Request $request){
        $place = Place::where("id",$request->id)->first();
        $place->status = "Куплен";
        $place->save();

        $ticket = Ticket::where('id_place', $place->id)->first();
        $ticket->id_user = $request->id_user;
        $ticket->status = "Куплен";
        $ticket->save();

        return redirect() ->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('places_create');
    }

    public function delete(Place $place)
    {
        $place->delete();
        return redirect()->route('places.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Place::create([
            'place_number' => request('place_number'),
            'id_trip' => request('id_trip'),
            'status' => request('status'),
            'price' => request('price'),
        ]);

        return redirect() ->route('places.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return view('places_show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $place->place_number= request('place_number');
        $place->id_trip = request('id_trip');
        $place->status = request('status');
        $place->price = request('price');
        $place->save();

        return redirect()->route('places.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
