@extends('Admins.layout')
@section('content')
<div class="card">
  <div class="card-header">Admins Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $Admins->name }}</h5>
        <p class="card-text">Address : {{ $Admins->address }}</p>
        <p class="card-text">Phone : {{ $Admins->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>