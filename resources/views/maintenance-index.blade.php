@extends('layout')
@section('content')
<h2>MAINTENANCE</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Buide</th>
                  <th>Number</th>
                  <th>Tel</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($maintenances as $maintenance)
                <tr>
                  <td>{{$maintenance->id}}</td>
                  <td>{{$maintenance->name}}</td>
                  <td>{{$maintenance->status}}</td>
                  <td>{{$maintenance->room->building}}</td>
                  <td>{{$maintenance->room->number}}</td>
                  <td>{{$maintenance->customer->tel}}</td>
                  
                 
				  <td><a href="product-edit.php?id='.$result['id'].'" class="btn btn-warning">Edit</a>
              <a href="/maintenance/delete/{{$maintenance->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
                
               
              </tbody>
				<div class="row">
        
				
            </table>
				<div class="col-xs-12 text-center">
          
            <a href="/room/create">
            <button class="btn btn-success">Add Maintenance</button>
            </a>
          
        </div>
      </div>
          </div>
@endsection