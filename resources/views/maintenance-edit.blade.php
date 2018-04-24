@extends('layout')
@section('content')

<h2>แก้ไขข้อมูลการแจ้งซ่อม</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/maintenance/edit/{{$maintenance->id}}" method="post">
                {{csrf_field()}}
                  <div class="form-group">
                  <label for="name">รายการ</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Earnest money" required="" value="{{$maintenance->name}}"> 
                  <br>
                  <label for="inputState">ห้อง</label>
                  <select id="inputState" class="form-control" name="room">
                        @foreach($rooms as $room)
                        <option @if($room->id == $maintenance->room->id) {{"selected"}} @endif value="{{$room->id}}">{{$room->building . ' ' . $room->number}}</option>
                        @endforeach
                  </select>
                  <br>
                  <label for="name">เบอร์ติดต่อ</label>
                  <input type="text" class="form-control" name="phone" id="name" placeholder="" required="" value="{{$maintenance->phone}}"> 
                  <br>
                  <label for="name">วันแจ้งซ่อม</label>
                  <input type="date" class="form-control" name="end" id="name" placeholder="End date" required="" value="{{$maintenance->created_at->toDateString()}}">
                  <br>
                  <p>สถานะ</p>
                   <div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="เสร็จสิ้น"
  @if($maintenance->status == 'เสร็จสิ้น') checked @endif>
  <label class="form-check-label" for="exampleRadios1">
    เสร็จสิ้น
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="รอดำเนินการ"
  @if($maintenance->status == 'รอดำเนินการ') checked @endif>
  <label class="form-check-label" for="exampleRadios2">
    รอดำเนินการ
  </label>
</div>
                </div>  	
            </table>
				<div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-warning">แก้ไขข้อมูล</button>
            <a href="/maintenance/index" class="btn btn-secondary">กลับ</a>
          </form>
        </div>
      </div>
          </div>
@endsection