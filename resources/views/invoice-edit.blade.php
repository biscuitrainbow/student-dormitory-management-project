@extends('layout')
@section('content')

<h2>EDIT INVOICE</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/invoices/{{$invoice->id}}" method="post">
                @method('PUT')
                {{csrf_field()}}
                  <div class="form-group">
                  <label for="inputState">Customer</label>
                  <select id="inputState" class="form-control" name="customer">
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->first_name . ' ' . $customer->last_name}}</option>
                            @endforeach 
                      </select>
                      <br>
                      <label for="inputState">Room</label>
                      <select id="inputState" class="form-control" name="room">
                            @foreach($rooms as $room)
                            <option value="{{$room->id}}">{{$room->building . ' ' . $room->number}}</option>
                            @endforeach
                      </select>
                      <br>
                      <label for="name">Room price</label>
                      <input type="text" class="form-control" name="room_price" id="name" placeholder="Room price" required="" value="{{$invoice->room_price}}">
                      <br>
                      <label for="name">Internet price</label>
                      <input type="text" class="form-control" name="internet" id="name" placeholder="Internet price" required="" value="{{$invoice->internet_price}}">
                      <br>
                      <label for="name">Last mount water unit</label>
                      <input type="text" class="form-control" name="lastw" id="name" placeholder="Last mount water unit" required="" value="{{$invoice->last_water_unit}}">
                      <br>
                      <label for="name">Water unit</label>
                      <input type="text" class="form-control" name="water_unit" id="name" placeholder="Water unit" required="" value="{{$invoice->water_unit}}">
                      <br>
                      <label for="name">Last mount electric unit</label>
                      <input type="text" class="form-control" name="laste" id="name" placeholder="Last mounte lectric unit" required="" value="{{$invoice->last_electricity_unit}}">
                      <br>
                      <label for="name">Electric unit</label>
                      <input type="text" class="form-control" name="electricity_unit" id="name" placeholder="Electric unit" required="" value="{{$invoice->electricity_unit}}">
                      <br>
                      <p>Status</p>
                      <div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Paid"
  @if($invoice->status == 'Paid') checked @endif>
  <label class="form-check-label" for="exampleRadios1">
  Paid
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Unpaid"
  @if($invoice->status == 'Unpaid') checked @endif>
  <label class="form-check-label" for="exampleRadios2">
  Unpaid
  </label>
                    </div>
 
                    
             	
            </table>
				<div class="col-xs-12 text-center">
        
        <button type="submit" class="btn btn-warning">UPDATE</button>
        <a href="/invoices" class="btn btn-secondary">BACK</a>
          </form>
        </div>
      </div>
          </div>
@endsection