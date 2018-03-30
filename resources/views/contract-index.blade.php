@extends('layout') 
@section('content')
<form action="/contract/index">
  <input class="form-control form-control-dark w-100" type="text" name="query" placeholder="Search" aria-label="Search">
</form>
<div style="display:flex; justify-content:space-between">
  <h2>CONTRACTS</h2>
  <a href="/contract/pdf">
    <button type="submit" class="btn btn-primary">PDF</button>
  </a>
</div><br>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Room</th>
        <th>Earnest money</th>
        <th>Insurer money</th>
        <th>Start date</th>
        <th>End date</th>
        <th>Witness name</th>
        <th>Document</th>
        <th>Status</th>
        <th>Manage</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contracts as $contract)
      <tr>
        <td>{{$contract->id}}</td>
        <td>{{$contract->customer->first_name . ' ' . $contract->customer->last_name}}</td>
        <td>{{$contract->room->building .' '. $contract->room->number}}</td>
        <td>{{$contract->earnest_money}}</td>
        <td>{{$contract->insurer_money}}</td>
        <td>{{date('d-m-Y', strtotime($contract->start))}}</td>
        <td>{{date('d-m-Y', strtotime($contract->end))}}</td>
        <td>{{$contract->witness_name}}</td>
        <td>
          <a href="/storage/{{$contract->document}}">Document</a>
        </td>
        @if($contract->status == 'Termination')
                  <td><h5><span class="badge badge-success">{{$contract->status}}</span></h5></td>   
                  @else 
                  <td><h5><span class="badge badge-danger">{{$contract->status}}</span></h5></td>   
                  @endif

        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
          <a href="/contract/edit/{{$contract->id}}" class="btn btn-warning">EDIT</a>
          <a href="/contract/delete/{{$contract->id}}" class="btn btn-danger">DELETE</a></div</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <div class="col-xs-12 text-center">
    <a href="/contract/create">
            <button class="btn btn-success">Add contract</button>
            </a>
  </div>
</div>
</div>
@endsection