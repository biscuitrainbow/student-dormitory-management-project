@extends('layout')
@section('content')

<h2>EDIT ROOM</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/room/edit/{{$room->id}}" method="post">
                {{csrf_field()}}
                  <div class="form-group"><form action="/room/create" method="post">
                      <label for="name">Building</label>
                      <input type="text" class="form-control" name="build" id="name" placeholder="Building" required="" value="{{$room->building}}">
                      <label for="name">Number</label>
                      <input type="text" class="form-control" name="number" id="name" placeholder="Number" required="" value="{{$room->number}}">

                      <p>Status</p>
                      <div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="available" checked>
  <label class="form-check-label" for="exampleRadios1">
    Available
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="not_avalable">
  <label class="form-check-label" for="exampleRadios2">
    Not Available
  </label>
</div>
                 </div>
 
                    
             	
            </table>
				<div class="col-xs-12 text-center">
          
            <button type="submit" class="btn btn-success">Update Room</button>
          </form>
        </div>
      </div>
          </div>
@endsection