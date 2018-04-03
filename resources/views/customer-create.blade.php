@extends('layout')
@section('content')

<h2>เพิ่มข้อมูลผู้เช่า</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/customer/create" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                      <label for="name">ชื่อ</label>
                      <input type="text" class="form-control" name="fname" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="name">นามสกุล</label>
                      <input type="text" class="form-control" name="lname" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="name">รหัสบัตรประชาชน</label>
                      <input type="text" class="form-control" name="idcard" id="name" placeholder="Ex . x-xxxx-xxxxx-xx-x" required="" value="">                  
                      <br>
                      <label for="name">ที่อยู่</label>
                      <input type="text" class="form-control" name="address" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="name">เบอร์ติดต่อ</label>
                      <input type="text" class="form-control" name="tel" id="name" placeholder="Ex. 0xx-xxx-xxxx" required="" value="">
                      <br>
                      <label for="name">อีเมล</label>
                      <input type="text" class="form-control" name="email" id="name" placeholder="name@example.com" required="" value="">
                      <br>
                      <label for="file">สำเนาบัตรประชน</label>
                      <input id="file" class="form-controler" name="document" type="file">
                      </div>             	
            </table>
				<div class="col-xs-12 text-center">
        
        <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
        <a href="/customer/index" class="btn btn-secondary">กลับ</a>
        </form>
        </div>
      </div>
          </div>
@endsection