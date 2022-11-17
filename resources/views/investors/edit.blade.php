@extends('base')

@section('contents')

<h1>Edit Investor</h1>
<hr>
<div class="row">
    <div class="col-md-6">
        {!! Form::model($investor,['url'=>'/investor/' . $investor->id, 'method'=> 'put'] ) !!}

        <div class="mb-3">
            {!! Form::label("name", "Name") !!}
            {!! Form::text("name", null, ['class'=>'form-control']) !!}
        </div>
        <div class="mb-3">
            {!! Form::label("address", "Address") !!}
            {!! Form::text("address", null, ['class'=>'form-control']) !!}
        </div>
        <div class="mb-3">
            {!! Form::label("phone", "Phone") !!}
            {!! Form::text("phone", null, ['class'=>'form-control']) !!}
        </div>
        <div class="mb-3">
            {!! Form::label("investment", "Investment") !!}
            {!! Form::text("investment", null, ['class'=>'form-control']) !!}
        </div>

        <a href="{{url('/investor')}}" class="btn btn-warning">
            <i class="fa-solid fa-circle-arrow-left"></i> Back
        </a> 
        
      <button class="btn btn-success" type="submit">
        <i class="fa-solid fa-user-check"></i> Save Changes
      </button>

      
        {!! Form::close() !!}
    </div>
</div>
@endsection