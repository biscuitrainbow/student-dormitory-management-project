@extends('layout')
@section('content')

<h2>เพิ่มข้อมูลห้องพัก</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <form action="/room/create" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                      <label for="name">อาคาร</label>
                      <input type="text" class="form-control" name="build" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="name">เลขห้อง</label>
                      <input type="text" class="form-control" name="number" id="name" placeholder="" required="" value="">
                      <br>
                      <label for="file">รูปภาพห้อง</label>
                      <input id="file" class="form-controler" name="document" type="file">
                    </div>                	
            </table>
				    <div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
            <a href="/room/index" class="btn btn-secondary">กลับ</a>
          </form>
        </div>
      </div>
          </div>
@endsection