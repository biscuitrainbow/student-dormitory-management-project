@extends('layout')
@section('content')

<h2>EDIT CONTRACT</h2><br>
          <div class="">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/contract/edit/{{$contract->id}}" method="post"  enctype="multipart/form-data">
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
                  <input type="text" class="form-control" name="earnest" id="name" placeholder="Earnest money" required="" value="{{$contract->earnest_money}}">
                  <br>
                  <label for="name">Insurer money</label>
                  <input type="text" class="form-control" name="insurer" id="name" placeholder="Insurer money" required="" value="{{$contract->insurer_money}}">                  
                  <br>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="name">Start date</label>
                  <input type="text" class="form-control" name="start" id="name" placeholder="Start date" required="" value="{{$contract->start}}">
                  </div>
                  <div class="form-group col-md-6">
                  <label for="name">End date</label>
                  <input type="text" class="form-control" name="end" id="name" placeholder="End date" required="" value="{{$contract->end}}">
                  </div>
                  </div>
                  <br>
                  <label for="name">Witness name</label>
                  <input type="text" class="form-control" name="witness" id="name" placeholder="Witness name" required="" value="{{$contract->witness_name}}">
                  <br>
                  Document : <a href="/storage/{{$contract->document}}">Document</a><br>
                    <label for="file">File</label>
                     <input id="file" class="form-controler" name="document" type="file">
                  <br>
                  <p>Status</p>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Termination"
  @if($contract->status == 'Termination') checked @endif >
  <label class="form-check-label" for="exampleRadios1">
  Termination
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="None termination"
  @if($contract->status == 'None termination') checked @endif >
  <label class="form-check-label" for="exampleRadios2">
  None termination
  </label>
  </div>
                </div>  	
            </table>
				<div class="col-xs-12 text-center">
          
            <button type="submit" class="btn btn-warning">UPDATE</button>
            <a href="/contract/index" class="btn btn-secondary">BACK</a> 
          </form>
        </div>
      </div>
          </div>
@endsection