@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
              <form action="{{route('managers.update',$managers->id)}}" method = "post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="manager_id">manager_id</label>
                <input type="text" name = "manager_id" value="{{$managers->manager_id}}" id = "manager_id" class="form-control" required>
                  </div>
                <div class="form-group">
                  <label for="manager_name">manager_name</label>
                  <input type="text" name = "manager_name" value="{{$managers->manager_name}}" id = "manager_name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="manager_department">manager_department</label>
                  <input type="text" name = "manager_department" value=" {{$managers->manager_department }}" id = "manager_department" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="manager_role">manager_role</label>
                  <input type="text" name = "manager_role" value="{{$managers->manager_role }} "  id = "manager_role" class="form-control" required>
                </div>
                
                 
                <button type = "submit" class = "btn btn-success">Submit</button>
              </form>
            </div>
          </div>
    </div>
@endsection