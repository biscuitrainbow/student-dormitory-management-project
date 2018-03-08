@extends('layout')
@section('content')
<h2>INVOICE</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Price</th>
                  <th>Water_unit</th>
                  <th>Electric_unit</th>
                  <th>Internet</th>
                  <th>Total</th>
                  <th>Room</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
				  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($invoices as $invoice)
                <tr>
                  <td>{{$invoice->id}}</td>
                  <td>{{$invoice->price}}</td>
                  <td>{{$invoice->water_unit}}</td>
                  <td>{{$invoice->electricity_unit}}</td>
                  <td>{{$invoice->internet}}</td>
                  <td>{{$invoice->total}}</td>
                  <td>{{$invoice->room->number}}</td>
                  <td>{{$invoice->customer->name}}</td>
                  <td>{{$invoice->customer->lastname}}</td>
                     
				  <td><a href="/invoices/{{$invoice->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/invoices/delete/{{$invoice->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
                
               
              </tbody>
				<div class="row">
        
				
            </table>
				<div class="col-xs-12 text-center">
          
            <a href="/invoices/create">
            <button class="btn btn-success">Add Room</button>
            </a>
          
        </div>
      </div>
          </div>
@endsection