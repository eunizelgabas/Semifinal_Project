@extends('base')

@section('contents')
<h1>Confirm Delete Investor</h1>
<hr>

<div class="card w-50">
    <div class="card-header" style="background-color: #BA94D1">
      Delete Investor
    </div>
    <div class="card-body">
      <h5 class="card-title">Are you sure you want to delete this investor:</h5>
        <p class="card-text"><span>Name:<span> {{$investor->name}}</p>
        <p class="card-text"><span>Address:<span> {{$investor->address}}</p>
        <p class="card-text"><span>Investment:<span> {{$investor->investment}}</p>
        {!! Form::open(['url'=>'/investor/' . $investor->id,'method'=>'delete', 'style'=>'display: inline-block']) !!}
            <button class="btn btn-danger" type="submit">
                <i class="fa-solid fa-trash"></i> Delete Speaker
            </button>
        {!! Form::close() !!}

        <a href="{{url('/investor/' . $investor->id)}}" class="btn btn-success">
            <i class="fa-solid fa-ban"></i> Cancel
        </a>
    </div>
</div>

@endsection