@extends('layout')
@section('content')

<h2>เพิ่มข้อมูลการแจ้งซ่อม</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/maintenance/create" method="post">
                {{csrf_field()}}
                  <div class="form-group">
                  <label for="name">รายการ</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="" required="" value="">
                  <br>
                  <label for="inputState">ห้อง</label>
                  <select id="inputState" class="form-control" name="room">
                        @foreach($rooms as $room)
                        <option value="{{$room->id}}">{{$room->building . ' ' . $room->number}}</option>
                        @endforeach
                  </select>
                  <br>
                  <label for="name">เบอร์ติดต่อ</label>
                  <input type="number" class="form-control" name="phone" id="name" placeholder="" required="" value="">
                  <br>
                  <label for="name">วันแจ้งซ่อม</label>
                  <input type="date" class="form-control" name="start" id="name" placeholder="" required="" value="">
                  
                </div>             	
            </table>
				<div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
            <a href="/maintenance/index" class="btn btn-secondary">กลับ</a>
          </form>
        </div>
      </div>
          </div>
@endsection