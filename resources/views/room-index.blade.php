@extends('layout')
@section('content')
<form action="/room/index">
  <input class="form-control form-control-dark w-100" type="text" name="query" placeholder="Search" aria-label="Search">
</form>

<div style="display:flex; justify-content:space-between">
  <h2>ROOMS</h2>
  <a href="/room/pdf">
    <button type="submit" class="btn btn-primary">PDF</button>
  </a>
</div>
<br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Building</th>
                  <th>Number</th>
                  <th>Furniture</th>
                  <th>Status</th>
				          <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rooms as $room)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$room->building}}</td>
                  <td>{{$room->number}}</td>
                  <td>{{$room->furniture}}</td>

                  @if($room->status == 'Available')
                  <td><h5><span class="badge badge-success">{{$room->status}}</span></h5></td>   
                  @else 
                  <td><h5><span class="badge badge-danger">{{$room->status}}</span></h5></td>   
                  @endif
				  <td>
          <div class="btn-group" role="group" aria-label="Basic example">
          <a href="/room/edit/{{$room->id}}" class="btn btn-warning">EDIT</a>
          <a href="/room/delete/{{$room->id}}" class="btn btn-danger">DELETE</a></DIV></td>
                </tr>
                @endforeach
                
        
              </tbody>
				<div class="row">
        
				
            </table>
            <br>
				    <div class="col-xs-12 text-center">
            <a href="/room/create">
            <button class="btn btn-success">Add room</button>
            </a>
          
        </div>
      </div>
          </div>
@endsection