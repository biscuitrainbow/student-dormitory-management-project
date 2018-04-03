@extends('layout')
@section('content')
<form action="/room/index">
  <input class="form-control form-control-dark w-100" type="text" name="query" placeholder="ค้นหา" aria-label="Search">
</form>

<div style="display:flex; justify-content:space-between">
  <h2>ข้อมูลห้องพัก</h2>
  <a href="/room/pdf">
    <button type="submit" class="btn btn-primary">PDF</button>
  </a>
</div>
<br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>อาคาร</th>
                  <th>เลขห้อง</th>
                  <th>เฟอร์นิเจอร์</th>
                  <th>สถานะ</th>
				          <th>จัดการข้อมูล</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rooms as $room)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$room->building}}</td>
                  <td>{{$room->number}}</td>
                  <td>{{$room->furniture}}</td>

                  @if($room->status == 'ว่าง')
                  <td><h5><span class="badge badge-success">{{$room->status}}</span></h5></td>   
                  @else 
                  <td><h5><span class="badge badge-danger">{{$room->status}}</span></h5></td>   
                  @endif
				  <td>
          <div class="btn-group" role="group" aria-label="Basic example">
          <a href="/room/edit/{{$room->id}}" class="btn btn-warning">แก้ไข</a>
          <a href="/room/delete/{{$room->id}}" class="btn btn-danger">ลบ</a></DIV></td>
                </tr>
                @endforeach
                
        
              </tbody>
				<div class="row">
        
				
            </table>
            <br>
				    <div class="col-xs-12 text-center">
            <a href="/room/create">
            <button class="btn btn-success">เพิ่มข้อมูล</button>
            </a>  
        </div>
        <br>
      </div>
          </div>
@endsection