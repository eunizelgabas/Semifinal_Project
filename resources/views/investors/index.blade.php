@extends('base')

@section('contents')
<h1>Investors</h1>
<hr>

<button type="button" class="btn float-end mb-lg-2" style="background-color:#DEBACE" data-bs-toggle="modal" data-bs-target="#exampleModal" >
  <i class="fa-solid fa-user-plus"></i> Add
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header text-dark" style="background-color:#DEBACE">
              <h1 class="modal-title fs-5 " id="add">Add Investor</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
              <div class="modal-body">
                  {!! Form::open(['url'=>'/investor','method'=>'post']) !!}
                      <div class="mb-3">
                          {!! Form::label("name", "Name:")!!}
                          {!! Form::text("name",null, ['class'=>'form-control'])!!}
                      </div>

                      <div class="mb-3">
                          {!! Form::label("address", "Address:")!!}
                          {!! Form::text("address",null, ['class'=>'form-control'])!!}
                      </div>

                      <div class="mb-3">
                          {!! Form::label("phone", "Phone:")!!}
                          {!! Form::number("phone",null, ['class'=>'form-control'])!!}
                      </div>

                      <div class="mb-3">
                          {!! Form::label("investment", "Investment:")!!}
                          {!! Form::text("investment",null, ['class'=>'form-control'])!!}
                      </div>    
              </div>
              
              <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                <i class="fa-solid fa-xmark"></i> Close
              </button>
              <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Create Investor
              </button>
              </div>
              {!! Form::close() !!}
          </div>
      </div>
  </div>
  

<table class="table table-bordered table-striped">
    <thead>
       <tr class="text-black" style="background-color: #BA94D1">
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Investments</th>
            <th class="text-center">...</th>
       </tr>
    </thead>
    <tbody>
        @foreach($investors as $investor)
        <tr>
            <td>{{$investor->name}}</td>
            <td>{{$investor->address}}</td>
            <td>{{$investor->phone}}</td>
            <td>{{$investor->investment}}</td>
            <td class="text-center">
              <a href="{{url('/investor/' . $investor->id)}}" 
                class="btn btn-sm" style="background-color:#DEBACE"
                title="View investor">
                <i class="fa-solid fa-eye" ></i>
              </a>  
              <a href="{{url('/investor/confirm-delete/' . $investor->id)}}"  
                class="btn btn-sm" style="background-color:#e9469f"
                title="Delete investor">
                <i class="fa-solid fa-trash"></i>
               </a>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@endsection