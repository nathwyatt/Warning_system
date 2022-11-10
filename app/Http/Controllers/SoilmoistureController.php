<?php

namespace App\Http\Controllers;

use App\Models\soilmoisture;
use Illuminate\Http\Request;

class SoilmoistureController extends Controller
{
    
    public function index()
    {
        $soilmoisture = soilmoisture::latest()->paginate(5);
        //dd($admins);
        return view('soilmoisture.index')->with('Soilnoisture', $soilmoisture)
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\soilmoisture  $soilmoisture
     * @return \Illuminate\Http\Response
     */
    public function show(soilmoisture $soilmoisture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\soilmoisture  $soilmoisture
     * @return \Illuminate\Http\Response
     */
    public function edit(soilmoisture $soilmoisture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\soilmoisture  $soilmoisture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, soilmoisture $soilmoisture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\soilmoisture  $soilmoisture
     * @return \Illuminate\Http\Response
     */
    public function destroy(soilmoisture $soilmoisture)
    {
        //
    }
}
