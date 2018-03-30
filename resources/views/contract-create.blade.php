@extends('layout')
@section('content')

<h2>ADD CONTRACT</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/contract/create" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                  <label for="inputState">Name</label>
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
                      <label for="name">Earnest money</label>
                      <input type="text" class="form-control" name="earnest" id="name" placeholder="Earnest money" required="" value="">
                      <br>
                      <label for="name">Insurer money</label>
                      <input type="text" class="form-control" name="insurer" id="name" placeholder="Insurer money" required="" value="">                  
                      <br>
                      <label for="name">Start date</label>
                      <input type="date" class="form-control" name="start" id="name" placeholder="Start date" required="" value="">
                      <br>
                      <label for="name">End date</label>
                      <input type="date" class="form-control" name="end" id="name" placeholder="End date" required="" value="">
                      <br>
                      <label for="name">Witness name</label>
                      <input type="text" class="form-control" name="witness" id="name" placeholder="Witness name" required="" value="">
                      <br>
                      <label for="file">Document</label>
                      <input id="file" class="form-controler" name="document" type="file">
                    </div>             	
            </table>
				<div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-success">ADD</button>
            <a href="/contract/index" class="btn btn-secondary">BACK</a>
          </form>
        </div>
      </div>
          </div>
@endsection