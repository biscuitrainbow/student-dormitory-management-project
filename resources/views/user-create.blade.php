@extends('layout')
@section('content')

<h2>ADD USER</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/user/create" method="post">
                {{csrf_field()}}
                  <div class="form-group">
                      <label for="name">First name</label>
                      <input type="text" class="form-control" name="first_name" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="name">Last name</label>
                      <input type="text" class="form-control" name="last_name" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="username">Username</label>
                      <div class="input-group">
                      <div class="input-group-prepend">
                      <span class="input-group-text">@</span></div>
                      <input type="text" class="form-control" name="username" id="username" placeholder="" required>
                      </div><br>
                      <label for="name">Password</label>
                      <input type="text" class="form-control" name="pass" id="name" placeholder="Password no more 9 number" required="" value="">                        
                    </div>             	
            </table>
				    <div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-success">ADD</button>
            <a href="/user/index" class="btn btn-secondary">BACK</a>
          </form>
        </div>
      </div>
          </div>
@endsection