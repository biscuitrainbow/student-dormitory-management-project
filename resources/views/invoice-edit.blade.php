@extends('layout')
@section('content')

<h2>แก้ไขข้อมูลการชำระ</h2><br>
          <div class="">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/invoices/{{$invoice->id}}" method="post">
                @method('PUT')
                {{csrf_field()}}
                  <div class="form-group">
                  <label for="inputState">ชื่อ - นามสกุล</label>
                  <select id="inputState" class="form-control" name="customer">
                            @foreach($customers as $customer)
                            <option  @if($customer->id == $invoice->customer->id) {{"selected"}} @endif value="{{$customer->id}}">{{$customer->first_name . ' ' . $customer->last_name}}</option>
                            @endforeach 
                      </select>
                      <br>
                      <label for="inputState">ห้อง</label>
                      <select id="inputState" class="form-control" name="room">
                            @foreach($rooms as $room)
                            <option @if($room->id == $invoice->room->id) {{"selected"}} @endif value="{{$room->id}}">{{$room->building . ' ' . $room->number}}</option>
                            @endforeach
                      </select>
                      <br>
                      <label for="name">ค่าห้อง</label>
                      <input type="text" class="form-control" name="room_price" id="name" placeholder="Room price" required="" value="{{$invoice->room_price}}">
                      <br>
                      <label for="name">ค่าอินเตอร์เน็ต</label>
                      <input type="text" class="form-control" name="internet" id="name" placeholder="Internet price" required="" value="{{$invoice->internet_price}}">
                      <br>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="name">ยูนิตน้ำเดือนก่อน</label>
                      <input type="text" class="form-control" name="lastw" id="name" placeholder="Last mount water unit" required="" value="{{$invoice->last_water_unit}}">
                      </div>
                      <div class="form-group col-md-6">
                      <label for="name">ยูนิตน้ำ</label>
                      <input type="text" class="form-control" name="water_unit" id="name" placeholder="Water unit" required="" value="{{$invoice->water_unit}}">
                    </div>
                  </div>
                  <br>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="name">ยูนิตไฟเดือนก่อน</label>
                      <input type="text" class="form-control" name="laste" id="name" placeholder="Last mounte lectric unit" required="" value="{{$invoice->last_electricity_unit}}">
                      </div>
                      <div class="form-group col-md-6">
                      <label for="name">ยูนิตไฟ</label>
                      <input type="text" class="form-control" name="electricity_unit" id="name" placeholder="Electric unit" required="" value="{{$invoice->electricity_unit}}">
                    </div>
                  </div>
                  <br>
                      <p>สถานะ</p>
                      <div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="ชำระ"
  @if($invoice->status == 'ชำระ') checked @endif>
  <label class="form-check-label" for="exampleRadios1">
    ชำระ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="ค้างชำระ"
  @if($invoice->status == 'ค้างชำระ') checked @endif>
  <label class="form-check-label" for="exampleRadios2">
    ค้างชำระ
  </label>
                    </div>
 
                    
             	
            </table>
				<div class="col-xs-12 text-center">
        
        <button type="submit" class="btn btn-warning">แก้ไขข้อมูล</button>
        <a href="/invoices" class="btn btn-secondary">กลับ</a>
          </form>
        </div>
      </div>
          </div>
@endsection