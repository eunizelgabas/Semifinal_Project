@extends('base')
@section('contents')
<div class="card text-center mt-4 w-50 mx-auto">
    <div class="card-header" style="background-color: #BA94D1">
      Welcome to Investor App
    </div>
    <div class="card-body">
      <h5 class="card-title">Be one of us</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="{{url('/investor/')}}"  class="btn" style="background-color: #7F669D">Click here</a>
    </div>
  </div> 
@endsection
