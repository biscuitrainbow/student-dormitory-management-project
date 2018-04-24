@extends('layout')
@section('content')

<h2>แก้ไขข้อมูลห้องพัก</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/room/edit/{{$room->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group"><form action="/room/create" method="post">
                      <label for="name">อาคาร</label>
                      <input type="text" class="form-control" name="build" id="name" placeholder="ตึก" required="" value="{{$room->building}}">
                      <br>
                      <label for="name">เลขห้อง</label>
                      <input type="text" class="form-control" name="number" id="name" placeholder="เลขห้อง" required="" value="{{$room->number}}">
                      <br>
                      <label for="name">เฟอร์นิเจอร์</label>
                      <input type="text" class="form-control" name="furniture" id="name" placeholder="เฟอร์นิเจอร์" required="" value="{{$room->furniture}}">
                      <br>
                      รูปภาพห้อง -<a href="/storage/{{$room->document}}"> รูปภาพ</a> ->
                      <input id="file" class="form-controler" name="document" type="file">
                      <br><br>
                      <p>สถานะ</p>
                      <div class="form-check">

                      
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="ว่าง" 
  @if($room->status == 'ว่าง') checked @endif>
  <label class="form-check-label" for="exampleRadios1">
    ว่าง
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="ไม่ว่าง" 
  @if($room->status == 'ไม่ว่าง') checked @endif >
  <label class="form-check-label" for="exampleRadios2">
    ไม่ว่าง
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="ชำรุด" 
  @if($room->status == 'ชำรุด') checked @endif >
  <label class="form-check-label" for="exampleRadios2">
    ชำรุด
  </label>
</div>
</div>
</table>
				<div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-warning">แก้ไขข้อมูล</button>
        <a href="/room/index" class="btn btn-secondary" role="button" aria-pressed="true">กลับ</a>
        </form>
        </div>
      </div>
          </div>
@endsection