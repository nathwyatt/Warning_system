@extends('Admins.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Admins Page</div>
  <div class="card-body">
      
      <form action="{{ url('Admins/' .$Admins->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Admins->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$Admins->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$Admins->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$Admins->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop