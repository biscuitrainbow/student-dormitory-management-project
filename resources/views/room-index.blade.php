@extends('layout')
@section('content')
<h2>ROOM</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Building</th>
                  <th>Number</th>
                  <th>Status</th>
				  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rooms as $room)
                <tr>
                  <td>{{$room->id}}</td>
                  <td>{{$room->building}}</td>
                  <td>{{$room->number}}</td>
                  <td>{{$room->status}}</td>  
				  <td><a href="/room/edit/{{$room->id}}" class="btn btn-warning">Edit</a>
              <a href="/room/delete/{{$room->id}}" class="btn btn-danger">Delete</a></td>
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