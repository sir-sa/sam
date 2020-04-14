@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
              <form action="{{route('workers.show',$employees->id)}}" method = "post">
                @csrf
                @method('GET')
                <div class="form-group">
                    <strong>employee_id:</strong>
                   {{$employees->employee_id}}  
                  </div>
                <div class="form-group">
                  <strong>employee_name:</strong>
                  {{$employees->firstname}} 
                </div>
                <div class="form-group">
                  <strong>employee_email:</strong>
                  {{$employees->employee_email}} 
                </div>
                <div class="form-group">
                  <strong>employee_phone:</strong>
                   {{$employees->employee_phone}} 
                </div>
                <div class="form-group">
                  <strong>employee_department:</strong>
                   {{$employees->employee_department}} 
                </div>
                

                <button href="/index" type = "submit" class = "btn btn-success">Submit</button>
                <a href="/workers" class="btn btn-default">Go Back</a>
              </form>
            </div>
          </div>
    </div>
@endsection