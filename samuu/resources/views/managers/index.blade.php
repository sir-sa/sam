@extends('layouts.app')
 
@section('content')
 
<div class="container">
  
    <a class="nav-link btn btn-info" href="{{url('managers/create')}}" style="margin-left:82%">Add New Manager </a>

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
              <th>Manager_id</th>
              <th>Manager_name</th>
              <th>Manager_department</th>
              <th>Manager_role</th>
              
              <th>Action</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
              @foreach ($managers as $manager)
                  
              <tbody>
               <tr class = "text-center">
                 <td>{{ $manager->manager_id }}</td>
                 <td>{{ $manager->manager_name }}</td>
                 
                 <td>{{ $manager->manager_department }}</td>
                 <td>{{ $manager->manager_role }}</td>
                 <td><a href="{{route('managers.show',$manager->id)}}" class = "btn btn-success">Show</a></td>
                 <td><a href="{{route('managers.edit', $manager->id)}}" class = "btn btn-info">Edit</a></td>
                 {{-- <td><a href="{{route('employees.update', ['id' => $employee->id] )}}" class = "btn btn-info">Edit</a></td> --}}
                 <td>
                   <form action="{{ url('managers/'.$manager->id)}}" method="post">
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