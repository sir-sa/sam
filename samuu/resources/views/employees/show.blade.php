@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
              <form action="{{route('employees.show',$employee->id)}}" method = "post">
                @csrf
                @method('GET')
                <div class="form-group">
                    <strong>employee_id:</strong>
                   {{$employee->employee_id}}  
                  </div>
                <div class="form-group">
                  <strong>employee_name:</strong>
                  {{$employee->firstname}} 
                </div>
                <div class="form-group">
                  <strong>employee_email:</strong>
                  {{$employee->employee_email}} 
                </div>
                <div class="form-group">
                  <strong>employee_phone:</strong>
                   {{$employee->employee_phone}} 
                </div>
                <div class="form-group">
                  <strong>employee_department:</strong>
                   {{$employee->employee_department}} 
                </div>
                

                <button href="/index" type = "submit" class = "btn btn-success">Submit</button>
                <a href="/employees" class="btn btn-default">Go Back</a>
              </form>
            </div>
          </div>
    </div>
@endsection