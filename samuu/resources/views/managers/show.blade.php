@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
              <form action="{{route('managers.show',$managers->id)}}" method = "post">
                @csrf
                @method('GET')
                <div class="form-group">
                    <strong>Manager_id</strong>
                   {{$managers->manager_id}}  
                  </div>
                <div class="form-group">
                  <strong>Manager_name</strong>
                  {{$managers->manager_name}} 
                </div>
                <div class="form-group">
                  <strong>Manager_department</strong>
                  {{$managers->manager_department }} 
                </div>
                <div class="form-group">
                  <strong>Manager_role</strong>
                   {{$managers->manager_role }} 
                </div>
                
                

                <button href="/index" type = "submit" class = "btn btn-success">Submit</button>
                <a href="/managers" class="btn btn-default">Go Back</a>
              </form>
            </div>
          </div>
    </div>
@endsection