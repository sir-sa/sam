@extends('layouts.app')
 
@section('content')
 
<div class="container">
  
    <a class="nav-link btn btn-info" href="{{url('workers/create')}}" style="margin-left:82%">Add New Employee </a>

   {{-- <a href="{{url('/employees.create')}}" class="btn btn-info" style="margin-left:82%">  @include('employees.create')Add New Student</a> --}}
     @if ($message = Session::get('success'))
       <div class="alert-success">
           <p>{{$message}}</p>
       </div>
     @endif
   <div class="row">
     <img style="height:250px" src="https://blog.vantagecircle.com/content/images/2019/03/Employee-recognition-1-1.png" class="card-img-top" alt="...">
     <div class="separator"></div>
     <div class="col-sm-12">
        <table class="table table-bordered" >
            <tr style="background:green">
              <th>Employee_id</th>
              <th>Employee_name</th>
              <th>Employee_email</th>
              <th>Employee_phone</th>
              <th>Employee_department</th>
              <th>Action</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
              @foreach ($employees as $employee)
                  
              <tbody>
               <tr class = "text-center">
                 <td>{{ $employee->employee_id }}</td>
                 <td>{{ $employee->employee_name }}</td>
                 <td>{{ $employee->employee_email }}</td>
                 <td>{{ $employee->employee_phone }}</td>
                 <td>{{ $employee->employee_department }}</td>
                  
                 <td><a href="{{route('workers.show',$employee->id)}}" class = "btn btn-success">Show</a></td>
                 <td><a href="{{route('workers.edit', $employee->id)}}" class = "btn btn-info">Edit</a></td>
                 {{-- <td><a href="{{route('employees.update', ['id' => $employee->id] )}}" class = "btn btn-info">Edit</a></td> --}}
                 <td>
                   <form action="{{ url('workers/'.$employee->id)}}" method="post">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger" type="submit">Delete</button>
                   </form>
                </td>
               </tr>
              </tbody>
              @endforeach
             
          </table>
       </div>
     </div>
</div>
@endsection
