<?php

namespace App\Http\Controllers;

use App\Models\Stations;
use Illuminate\Http\Request;

class StationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = stations::latest()->paginate(5);
        return view('Stations.index')->with('Stations', $stations)
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view ('Stations.create');
    }

    public function store(Request $request)
    {
       
        $input = $request->all();
        stations::create($input);
        return redirect('Stations')->with('success','Stations created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stations  $stations
     * @return \Illuminate\Http\Response
     */
    public function show(Stations $stations)
    {
        return view('stations.show',compact('stations'));
    } 
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stations  $stations
     * @return \Illuminate\Http\Response
     */
    public function edit(Stations $stations)
    {
        return view('stations.show',compact('stations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stations  $stations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stations $stations)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);
    
        $stations->update($request->all());
    
        return redirect()->route('stations.index')
                        ->with('success','Stations updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stations  $stations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stations $stations)
    {
        $stations->delete();
    
        return redirect()->route('stations.index')
                        ->with('success','Stations deleted successfully');  
    }
}
