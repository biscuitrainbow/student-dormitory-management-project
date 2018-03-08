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
                      <label for="name">Price</label>
                      <input type="text" class="form-control" name="price" id="name" placeholder="Building" required="" value="{{$invoice->price}}">
                      <label for="name">Water_unit</label>
                      <input type="text" class="form-control" name="water_unit" id="name" placeholder="Building" required="" value="{{$invoice->water_unit}}">
                      <label for="name">Electric_unit</label>
                      <input type="text" class="form-control" name="electricity_unit" id="name" placeholder="Building" required="" value="{{$invoice->electricity_unit}}">
                      <label for="name">Internet</label>
                      <input type="text" class="form-control" name="internet" id="name" placeholder="Number" required="" value="{{$invoice->internet}}">
                      <label for="inputState">Customer</label>
                      <select id="inputState" class="form-control" name="customer">
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name . ' ' . $customer->lastname}}</option>
                            @endforeach 
                      </select>
                      <label for="inputState">Room</label>
                      <select id="inputState" class="form-control" name="room">
                            @foreach($rooms as $room)
                            <option value="{{$room->id}}">{{$room->number}}</option>
                            @endforeach
                      </select>
                    </div>
 
                    
             	
            </table>
				<div class="col-xs-12 text-center">
          
            <button type="submit" class="btn btn-success">Update Invoice</button>
          </form>
        </div>
      </div>
          </div>
@endsection