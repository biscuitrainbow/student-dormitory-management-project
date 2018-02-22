@extends('layout')
@section('content')
<h2>USER</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Lastname</th>
                  <th>Username</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)                
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->lastname}}</td>
                  <td>{{$user->username}}</td>
				  <td><a href="" class="btn btn-warning">Edit</a>
                  <a href="/room/delete/" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
                
               
              </tbody>
				<div class="row">
        
				
            </table>
				<div class="col-xs-12 text-center">
          
            <a href="/room/create">
            <button class="btn btn-success">Add Room</button>
            </a>
          
        </div>
      </div>
          </div>
@endsection