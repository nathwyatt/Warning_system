@extends('users.layout')
  
@section('content')
<div class="card">
  <div class="card-header">Admins Page</div>
  <div class="card-body">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>

   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('users.store') }}" method="POST">
    @csrf
  
     
            <div >
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
       
            <div >
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
            <div>
                <strong>Station:</strong>
                <select class="form-control">
<option value="s_1"> Mukungwa</option>
<option value="s_2"> Nyabugogo</option>
<option value="s_3"> Nyakabanda</option>
<option value="s_4"> Sebeya</option>
                </select>
            </div>
            <div >
                <strong>password:</strong>
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
            <div >
                <strong>password:</strong>
                
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
       
            <div >
                <strong>Phone_number:</strong>
                <input type="text" name="phone_number" class="form-control" placeholder="phone_number">
            </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection