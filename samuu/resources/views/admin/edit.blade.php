@extends('layouts.app')
 
@section('content')
    
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-md-8">
                   <div class="card">
                   <div class="card-header">Edit users {{$user->name}}</div>

                       <div class="card-body">
                           <form action="{{route('admin.admin.update',$user)}}">
                              @csrf
                              @method(PUT)
                              @foreach ($roles as $role)
                                  <div class="form-check">
                                      <input type="checkbox" name="roles[]" value="{{$role->id}}">
                                      <label>{{$role->name}}</label>
                                  </div>
                              @endforeach
                              <button type="submit" class="btn btn-success">
                                  update
                              </button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>  

@endsection