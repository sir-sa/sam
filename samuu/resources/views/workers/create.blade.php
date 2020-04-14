@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
              <form action="{{route('workers.store')}}" method = "post">
                @csrf
                <div class="form-group">
                    <label for="employee_id">employee_id</label>
                    <input type="text" name="employee_id" id="employee_id" class="form-control" required>
                  </div>
                <div class="form-group">
                  <label for="employee_name">employee_name</label>
                  <input type="text" name = "employee_name" id = "employee_name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="employee_email">employee_email</label>
                  <input type="text" name = "employee_email" id = "employee_email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="employee_phone">employee_phone</label>
                  <input type="text" name = "employee_phone" id = "employee_phone" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="employee_department">employee_department</label>
                  <input type="text" name = "employee_department" id = "employee_department" class="form-control" required>
                </div>
                

                <button type = "submit" class = "btn btn-success">Submit</button>
              </form>
            </div>
          </div>
    </div>
@endsection