@extends('layout')
@section('content')

<h2>ADD RENTER</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/customer/create" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                      <label for="name">First name</label>
                      <input type="text" class="form-control" name="fname" id="name" placeholder="Mr. or Miss." required="" value="">
                      <br>
                      <label for="name">Last name</label>
                      <input type="text" class="form-control" name="lname" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="name">Id card</label>
                      <input type="text" class="form-control" name="idcard" id="name" placeholder="Ex . x-xxxx-xxxxx-xx-x" required="" value="">                  
                      <br>
                      <label for="name">Address</label>
                      <input type="text" class="form-control" name="address" id="name" placeholder="Address" required="" value="">
                      <br>
                      <label for="name">Telephone</label>
                      <input type="text" class="form-control" name="tel" id="name" placeholder="Ex. 0xx-xxx-xxxx" required="" value="">
                      <br>
                      <label for="name">Email</label>
                      <input type="text" class="form-control" name="email" id="name" placeholder="name@example.com" required="" value="">
                      <br>
                      <label for="file">Document</label>
                      <input id="file" class="form-controler" name="document" type="file">
                      </div>             	
            </table>
				<div class="col-xs-12 text-center">
        
        <button type="submit" class="btn btn-success">ADD</button>
        <a href="/customer/index" class="btn btn-secondary">BACK</a>
        </form>
        </div>
      </div>
          </div>
@endsection