@extends('base')

@section('contents')

<h1>View Investor</h1>
<hr>

<div class="row">
    <div class="col-md-6">
        <table class="table table-bordered">
            <tr>
                <th class="text-white" style="background-color: #BA94D1">Name</th>
                <td>{{$investor->name}}</td>
            </tr>
            <tr>
                <th class="text-white" style="background-color: #BA94D1">Address</th>
                <td>{{$investor->address}}</td>
            </tr>
            <tr>
                <th class="text-white" style="background-color: #BA94D1">Phone</th>
                <td>{{$investor->phone}}</td>
            </tr>
            <tr>
                <th class="text-white" style="background-color: #BA94D1">Investment</th>
                <td>{{$investor->investment}}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-3">
        <button type="button"  class="btn btn-warning w-100 mb-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-regular fa-pen-to-square"></i> Edit Investor
        </button>
        <a href="{{url('/investor')}}"  class="btn btn-info w-100 mb-2">
            <i class="fa-solid fa-angles-left"></i> Back
        </a>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-light" style="background-color:#282A3A">
                        <h1 class="modal-title fs-5 " id="add">Edit Investor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
           
                    <div class="modal-body">
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
                        
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Close</button>
                            <button type="submit" class="btn btn-primary"> <i class="fa-regular fa-floppy-disk"></i> Save changes</button>
                        </div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
