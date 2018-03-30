@extends('layout')
@section('content')

<h2>ADD MAINTENANCE</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/maintenance/create" method="post">
                {{csrf_field()}}
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="" value="">
                  <br>
                  <label for="inputState">Room</label>
                  <select id="inputState" class="form-control" name="room">
                        @foreach($rooms as $room)
                        <option value="{{$room->id}}">{{$room->building . ' ' . $room->number}}</option>
                        @endforeach
                  </select>
                  <br>
                  <label for="name">Telephone</label>
                  <select id="inputState" class="form-control" name="customer">
                        @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->telephone}}</option>
                        @endforeach
                  </select>
                  <br>
                  <label for="name">Create Date</label>
                  <input type="date" class="form-control" name="start" id="name" placeholder="Create date" required="" value="">
                  
                </div>             	
            </table>
				<div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-success">ADD</button>
            <a href="/maintenance/index" class="btn btn-secondary">BACK</a>
          </form>
        </div>
      </div>
          </div>
@endsection