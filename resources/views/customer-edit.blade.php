@extends('layout')
@section('content')

<h2>EDIT RENTER</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/customer/edit/{{$customer->id}}" method="post"  enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group"><form action="/customer/create" method="post">
                      <label for="name">First name</label>
                      <input type="text" class="form-control" name="fname" id="name" placeholder="" required="" value="{{$customer->first_name}}">
                      <br>
                      <label for="name">Last name</label>
                      <input type="text" class="form-control" name="lname" id="name" placeholder="" required="" value="{{$customer->last_name}}">
                      <br>
                      <label for="name">Id card</label>
                      <input type="text" class="form-control" name="idcard" id="name" placeholder="" required="" value="{{$customer->id_card}}">
                      <br>
                      <label for="name">Address</label>
                      <input type="text" class="form-control" name="address" id="name" placeholder="" required="" value="{{$customer->address}}">
                      <br>
                      <label for="name">Telephone</label>
                      <input type="text" class="form-control" name="tel" id="name" placeholder="" required="" value="{{$customer->telephone}}">
                      <br>
                      <label for="name">Email</label>
                      <input type="text" class="form-control" name="email" id="name" placeholder="" required="" value="{{$customer->e_mail}}">
                      <br>

                      Document <a href="/storage/{{$customer->document}}">Document</a><br>
                      <label for="file">File</label>
                     <input id="file" class="form-controler" name="document" type="file">
                      <br><br>
                      <p>Status</p>
                      <div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Currently"
  @if($customer->status == 'Currently') checked @endif >
  <label class="form-check-label" for="exampleRadios1">
    Currently
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Not currently"
  @if($customer->status == 'Not currently') checked @endif >
  <label class="form-check-label" for="exampleRadios2">
    Not Currently
  </label>
</div>
                 </div>
            </table>
				<div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-warning">UPDATE</button>
            <button type="submit" class="btn btn-secondary">BACK</button>
          </form>
        </div>
      </div>
          </div>
@endsection