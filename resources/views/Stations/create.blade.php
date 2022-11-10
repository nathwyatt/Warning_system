@extends('Admins.layout')
@section('content')
<div class="card">
  <div class="card-header">Station Page</div>
  <div class="card-body">
      
      <form action="{{ url('/Stations') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>district</label></br>
        <input type="text" name="district" id="district" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop