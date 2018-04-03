@extends('layout')
@section('content')

<h2>เพิ่มข้อมูลการชำระ</h2><br>
          <div class="">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/invoices" method="post">
                {{csrf_field()}}
                  <div class="form-group">
                  <label for="inputState">ชื่อ - สกุล</label>
                  <select id="inputState" class="form-control" name="customer">
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->first_name . ' ' . $customer->last_name}}</option>
                            @endforeach 
                      </select>
                      <br>
                      <label for="inputState">ห้อง</label>
                      <select id="inputState" class="form-control" name="room">
                            @foreach($rooms as $room)
                            <option value="{{$room->id}}">{{$room->building . ' ' . $room->number}}</option>
                            @endforeach
                      </select>
                      <br>
                      <label for="name">ค่าห้อง</label>
                      <input type="text" class="form-control" name="room_price" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="name">ค่าอินเตอร์เน็ต</label>
                      <input type="text" class="form-control" name="internet" id="name" placeholder="" required="" value="">
                      <br>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="name">ยูนิตน้ำเดือนก่อน	</label>
                      <input type="text" class="form-control" name="lastw" id="name" placeholder="ยูนิต" required="" value="">
                      </div>
                      <div class="form-group col-md-6">
                      <label for="name">ยูนิตน้ำ</label>
                      <input type="text" class="form-control" name="water_unit" id="name" placeholder="ยูนิต" required="" value="">
                    </div>
                  </div>
                  <br>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="name">ยูนิตไฟเดือนก่อน</label>
                      <input type="text" class="form-control" name="laste" id="name" placeholder="ยูนิต" required="" value="">
                      </div>
                      <div class="form-group col-md-6">
                      <label for="name">ยูนิตไฟ</label>
                      <input type="text" class="form-control" name="electricity_unit" id="name" placeholder="ยูนิต" required="" value="">
                    </div>
                  </div>
                  
 
                    
             	
            </table>
				<div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
        <a href="/invoices" class="btn btn-secondary">กลับ</a>
          </form>
        </div>
      </div>
          </div>
@endsection