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
                      <input type="text" class="form-control" name="build" id="name" placeholder="ตึก" required="" value="{{$room->building}}">
                      <br>
                      <label for="name">Number</label>
                      <input type="text" class="form-control" name="number" id="name" placeholder="เลขห้อง" required="" value="{{$room->number}}">
                      <br>
                      <label for="name">Furniture</label>
                      <input type="text" class="form-control" name="furniture" id="name" placeholder="เฟอร์นิเจอร์" required="" value="{{$room->furniture}}">
                      <br>
                      <p>Status</p>
                      <div class="form-check">

                      
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Available" 
  @if($room->status == 'Available') checked @endif>
  <label class="form-check-label" for="exampleRadios1">
    Available
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Not available" 
  @if($room->status == 'Not available') checked @endif >
  <label class="form-check-label" for="exampleRadios2">
    Not available
  </label>
</div>
</div>
</table>
				<div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-warning">UPDATE</button>
        <a href="/room/index" class="btn btn-secondary" role="button" aria-pressed="true">BACK</a>
        </form>
        </div>
      </div>
          </div>
@endsection