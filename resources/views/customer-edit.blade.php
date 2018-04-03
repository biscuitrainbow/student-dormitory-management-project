@extends('layout')
@section('content')

<h2>แก้ไขข้อมูลผู้เช่า</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/customer/edit/{{$customer->id}}" method="post"  enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group"><form action="/customer/create" method="post">
                      <label for="name">ชื่อ</label>
                      <input type="text" class="form-control" name="fname" id="name" placeholder="" required="" value="{{$customer->first_name}}">
                      <br>
                      <label for="name">นามสกุล</label>
                      <input type="text" class="form-control" name="lname" id="name" placeholder="" required="" value="{{$customer->last_name}}">
                      <br>
                      <label for="name">รหัสบัตรประชาชน</label>
                      <input type="text" class="form-control" name="idcard" id="name" placeholder="" required="" value="{{$customer->id_card}}">
                      <br>
                      <label for="name">ที่อยู่</label>
                      <input type="text" class="form-control" name="address" id="name" placeholder="" required="" value="{{$customer->address}}">
                      <br>
                      <label for="name">เบอร์ติดต่อ</label>
                      <input type="text" class="form-control" name="tel" id="name" placeholder="" required="" value="{{$customer->telephone}}">
                      <br>
                      <label for="name">อีเมล</label>
                      <input type="text" class="form-control" name="email" id="name" placeholder="" required="" value="{{$customer->e_mail}}">
                      <br>

                      สำเนาบัตรประชาชน <a href="/storage/{{$customer->document}}">Document</a><br>
                      <label for="file">File</label>
                     <input id="file" class="form-controler" name="document" type="file">
                      <br><br>
                      <p>สถานะ</p>
                      <div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="อยู่ในระบบ"
  @if($customer->status == 'อยู่ในระบบ') checked @endif >
  <label class="form-check-label" for="exampleRadios1">
    อยู่ในระบบ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="ออกจากระบบ"
  @if($customer->status == 'ออกจากระบบ') checked @endif >
  <label class="form-check-label" for="exampleRadios2">
    ออกจากระบบ 
  </label>
</div>
                 </div>
            </table>
				<div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-warning">แก้ไขข้อมูล</button>
            <button type="submit" class="btn btn-secondary">กลับ</button>
          </form>
        </div>
      </div>
          </div>
@endsection