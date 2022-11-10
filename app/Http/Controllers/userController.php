<?php
  
namespace App\Http\Controllers;
   
use App\Models\users;
use Illuminate\Http\Request;
  
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = users::latest()->paginate(5); 
    
       return view('users.index')->with('users',$users)
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
   
    public function create()
    {
        return view('users.create');
    }
    
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
        ]);
    
        users::create($request->all());
     
        return redirect()->route('users.index')
                        ->with('success','user created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        return view('users.show',compact('users'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\users  $usrs
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
        return view('users.edit',compact('users'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users $users)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $users->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','users updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        $users->delete();
    
        return redirect()->route('users.index')
                        ->with('success','users deleted successfully');
    }
}