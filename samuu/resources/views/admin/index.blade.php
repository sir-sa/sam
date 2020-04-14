 @extends('layouts.app')
 
 @section('content')
     
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">users</div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        {{$user->name}} - {{$user->email}}
                                        <tr>
                                          <th scope="row">{{$user->id}}</th>
                                          <td>{{$user->name}}</td>
                                          <td>{{$user->email}}</td>
                                          <td>
                                            <a href="{{route('admin.admin.edit',$user->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
                                            <a href="{{route('admin.admin.destroy',$user->id)}}"><button type="button" class="btn btn-warning">Delete</button></a>
                                          </td>
                                        </tr>
                                    @endforeach
                                  
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
 
 @endsection