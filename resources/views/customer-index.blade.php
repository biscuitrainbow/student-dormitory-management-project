@extends('layout')
@section('content')
<h2>CUSTOMER</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Lastname</th>
                  <th>Address</th>
				          <th>Email</th>
                  <th>Tel</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($customers as $customer)
                <tr>
                  <td>{{$customer->id}}</td>
                  <td>{{$customer->name}}</td>
                  <td>{{$customer->lastname}}</td>
                  <td>{{$customer->address}}</td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->tel}}</td>   
				  <td><a href="product-edit.php?id='.$result['id'].'" class="btn btn-warning">Edit</a>
              <a href="/customer/delete/{{$customer->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
                
               
              </tbody>
				<div class="row">
        
				
            </table>
				<div class="col-xs-12 text-center">
          
            <a href="/room/create">
            <button class="btn btn-success">Add Customer</button>
            </a>
          
        </div>
      </div>
          </div>
@endsection