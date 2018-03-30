@extends('layout')
@section('content')

<h2>EDIT MAINTENANCE</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/maintenance/edit/{{$maintenance->id}}" method="post">
                {{csrf_field()}}
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Earnest money" required="" value="{{$maintenance->name}}"> 
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
                  <input type="text" class="form-control" name="end" id="name" placeholder="End date" required="" value="{{$maintenance->created_at}}">
                  <br>
                  <p>Status</p>
                   <div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Finished"
  @if($maintenance->status == 'Finished') checked @endif>
  <label class="form-check-label" for="exampleRadios1">
  Finished
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Not finished"
  @if($maintenance->status == 'Not finished') checked @endif>
  <label class="form-check-label" for="exampleRadios2">
  Not finished
  </label>
</div>
                </div>  	
            </table>
				<div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-warning">UPDATE</button>
            <a href="/maintenance/index" class="btn btn-secondary">BACK</a>
          </form>
        </div>
      </div>
          </div>
@endsection