@extends('layout')
@section('content')

<h2>ADD ROOM</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/room/create" method="post">
                {{csrf_field()}}
                  <div class="form-group">
                      <label for="name">Building</label>
                      <input type="text" class="form-control" name="build" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="name">Number</label>
                      <input type="text" class="form-control" name="number" id="name" placeholder="" required="" value="">                  
                    </div>             	
            </table>
				    <div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-success">ADD</button>
            <a href="/room/index" class="btn btn-secondary">BACK</a>
          </form>
        </div>
      </div>
          </div>
@endsection