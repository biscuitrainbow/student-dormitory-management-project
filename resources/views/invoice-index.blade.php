@extends('layout')
@section('content')
<form action="/maintenance/index">
  <input class="form-control form-control-dark w-100" type="text" name="query" placeholder="Search" aria-label="Search">
</form>
<h2>INVOICES</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Room</th>
                  <th>Name</th>
                  <th>Room price</th>
                  <th>Internetet price</th>
                  <th>Last mount water</th>
                  <th>Water unit</th>
                  <th>Last mount electric</th>
                  <th>Electric unit</th>
                  <th>Total price</th>
                  <th>Status</th>
				          <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($invoices as $invoice)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$invoice->room->building .' '. $invoice->room->number}}</td>
                  <td>{{$invoice->customer->first_name . ' ' . $invoice->customer->last_name}}</td>
                  <td>{{$invoice->room_price}}</td>
                  <td>{{$invoice->internet_price}}</td>
                  <td>{{$invoice->last_water_unit}}</td>
                  <td>{{$invoice->water_unit}}</td>
                  <td>{{$invoice->last_electricity_unit}}</td>
                  <td>{{$invoice->electricity_unit}}</td>
                  <td>{{$invoice->total}}</td>
                  @if($invoice->status == 'Paid')
                  <td><h5><span class="badge badge-success">{{$invoice->status}}</span></h5></td>   
                  @else 
                  <td><h5><span class="badge badge-danger">{{$invoice->status}}</span></h5></td>   
                  @endif

                     
				      <td>
              <div class="btn-group" role="group" aria-label="Basic example">
              <a href="/invoices/{{$invoice->id}}/edit" class="btn btn-warning">EDIT</a>
              <a href="/invoices/delete/{{$invoice->id}}" class="btn btn-danger">DELETE</a>
              <a href="/invoices/pdf/{{$invoice->id}}" class="btn btn-primary">PDF</a></div>
              </td>
                </tr>
                @endforeach
                
               
              </tbody>
				<div class="row">
        
				
            </table>
            <br>
				<div class="col-xs-12 text-center">
          
            <a href="/invoices/create">
            <button class="btn btn-success">Add invoice</button>
            </a>
          
        </div>
      </div>
          </div>
@endsection