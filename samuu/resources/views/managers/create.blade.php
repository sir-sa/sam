@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
              <form action="{{route('managers.store')}}" method = "post">
                @csrf
                <div class="form-group">
                    <label for="manager_id">Manager_id</label>
                    <input type="text" name = "manager_id" id = "manager_id" class="form-control" required>
                  </div>
                <div class="form-group">
                  <label for="manager_name">Manager_name</label>
                  <input type="text" name = "manager_name" id = "manager_name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="manager_department">Manager_department</label>
                  <input type="text" name = "manager_department" id = "manager_department" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="manager_role">Manager_role</label>
                  <input type="text" name = "manager_role" id = "manager_role" class="form-control" required>
                </div>
                
                

                <button type = "submit" class = "btn btn-success">Submit</button>
              </form>
            </div>
          </div>
    </div>
@endsection