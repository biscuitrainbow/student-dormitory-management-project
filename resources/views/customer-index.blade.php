@extends('layout')
@section('content')
<form action="/customer/index">
  <input class="form-control form-control-dark w-100" type="text" name="query" placeholder="Search" aria-label="Search">
</form>
<div style="display:flex; justify-content:space-between">
<h2>RENTERS</h2>
<a href="/customer/pdf">
    <button type="submit" class="btn btn-primary">PDF</button>
  </a>
</div>
<br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last name</th>
                  <th>ID Card</th>
                  <th>Address</th>
                  <th>Telephone</th>
                  <th>Email</th>
                  <th>Document</th>
                  <th>Status</th>                                 
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($customers as $customer)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$customer->first_name}}</td>
                  <td>{{$customer->last_name}}</td>
                  <td>{{$customer->id_card}}</td>
                  <td>{{$customer->address}}</td>
                  <td>{{$customer->telephone}}</td>
                  <td>{{$customer->e_mail}}</td>
                  <td>
                  <a href="/storage/{{$customer->document}}">Document</a>
                  </td>
                  @if($customer->status == 'Currently')
                  <td><h5><span class="badge badge-success">{{$customer->status}}</span></h5></td>   
                  @else 
                  <td><h5><span class="badge badge-danger">{{$customer->status}}</span></h5></td>   
                  @endif

				  <td>
              <div class="btn-group" role="group" aria-label="Basic example">
              <a href="/customer/edit/{{$customer->id}}" class="btn btn-warning">EDIT</a>
              <a href="/customer/delete/{{$customer->id}}" class="btn btn-danger">DELETE</a></div></td>
                </tr>
                @endforeach
              </tbody>
				<div class="row">
            </table>
				<div class="col-xs-12 text-center">
            <a href="/customer/create">
            <button class="btn btn-success">Add renter</button>
            </a>
        </div>
      </div>
          </div>
@endsection