@extends('Admins.layout')
@section('content')
<div class="card">
  <div class="card-header">Admins Page</div>
  <div class="card-body">
      
      <form action="{{ url('/Admins') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success" ></br>
    </form>
  
  </div>
</div>
@stop