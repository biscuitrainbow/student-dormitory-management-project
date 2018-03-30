@extends('layout')
@section('content')

<h2>EDIT USER</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/user/edit/{{$user->id}}" method="post">
                {{csrf_field()}}
                  <div class="form-group"><form action="/user/create" method="post">
                      <label for="name">First name</label>
                      <input type="text" class="form-control" name="first_name" id="name" placeholder="" required="" value="{{$user->first_name}}">
                      <br>
                      <label for="name">Last name</label>
                      <input type="text" class="form-control" name="last_name" id="name" placeholder="" required="" value="{{$user->last_name}}">
                      <br>
                      <label for="name">Username</label>
                      <input type="text" class="form-control" name="username" id="name" placeholder="" required="" value="{{$user->username}}">
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