<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admins;

class adminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = admins::latest()->paginate(5);
        //dd($admins);
        return view('Admins.index')->with('Admins', $admins)
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('Admins.create');
    }
   public function store(Request $request)
    {
        $input = $request->all();
        admins::create($input);
        return redirect('Admins')->with('flash_message', 'new admin Added!');  
    }

    public function show($id)
    {
        $admins = Admins::find($id);
        return view('Admins.show')->with('Admins', $admins);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = Admins::find($id);
        return view('Admins.edit')->with('Admins', $admins); 
    }

    
    public function update(Request $request, $id)
    {
        $admins = Admins::find($id);
        $input = $request->all();
        $admins->update($input);
        return redirect('Admins')->with('flash_message', 'Contact Updated!'); 
    }

    
    public function destroy($id)
    {
        Admins::destroy($id);
        return redirect('Admins')->with('flash_message', 'Contact deleted!');
    }
}
