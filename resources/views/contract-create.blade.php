@extends('layout')
@section('content')

<h2>เพิ่มข้อมูลผู้เช่า</h2><br>
          <div class="">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/contract/create" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                  <label for="inputState">ชื่อ - นามสกุล</label>
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
                      <label for="name">ค่ามัดจำ</label>
                      <input type="text" class="form-control" name="earnest" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="name">ค่าประกัน</label>
                      <input type="text" class="form-control" name="insurer" id="name" placeholder="" required="" value="">                  
                      <br>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="name">เริ่มสัญญา</label>
                      <input type="date" class="form-control" name="start" id="name" placeholder="" required="" value="">
                      </div>
                      <div class="form-group col-md-6">
                      <label for="name">หมดสัญญา</label>
                      <input type="date" class="form-control" name="end" id="name" placeholder="" required="" value="">
                    </div>
                  </div>
                  <br>
                      <label for="name">ชื่อผู้เช่าร่วม</label>
                      <input type="text" class="form-control" name="witness" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="file">สำเนาสัญญา</label>
                      <input id="file" class="form-controler" name="document" type="file">
                    </div>             	
            </table>
				<div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
            <a href="/contract/index" class="btn btn-secondary">กลับ</a>
          </form>
        </div>
      </div>
          </div>
@endsection