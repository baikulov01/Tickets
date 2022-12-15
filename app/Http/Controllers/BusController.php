<?php

namespace App\Http\Controllers;

use App\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses = Bus::all();
        return view('busesPage',compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    public function delete(Bus $bus)
    {
        $bus->delete();
        return redirect()->route('buses.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bus::create([
            'number' => request('number'),
            'place_count' => request('place_count')
        ]);
        return redirect()->route('buses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus)
    {
        return view('show', compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {
            $bus->number= request('number');
            $bus->place_count = request('place_count');
            $bus->save();

        return redirect()->route('buses.index');
    }

    public function search(Request $request)
    {
        $s = $request ->s;
        $buses = Bus::where('number', 'LIKE', "%{$s}%")->orderBy('number')->paginate(10);
        
        return view('busesPage',compact('buses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus $bus)
    {
        //DB::table('buses')->where('id', '=',  )->delete();
    }
}
