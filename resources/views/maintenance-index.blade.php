@extends('layout')
@section('content')
<form action="/maintenance/index">
  <input class="form-control form-control-dark w-100" type="text" name="query" placeholder="ค้นหา" aria-label="Search">
</form>
<div style="display:flex; justify-content:space-between">
<h2>ข้อมูลการแจ้งซ่อม</h2>
<a href="/maintenance/pdf">
    <button type="submit" class="btn btn-primary">PDF</button>
  </a>
</div>
<br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>รายการ</th>
                  <th>อาคาร</th>
                  <th>เลขห้อง</th>
                  <th>เบอร์ติดต่อ</th>
                  <th>วันแจ้งซ่อม</th>
                  <th>สถานะ</th>
                  <th>จัดการข้อมูล</th>
                </tr>
              </thead>
              <tbody>
                @foreach($maintenances as $maintenance)
                <tr>
                  <td>{{$maintenance->id}}</td>
                  <td>{{$maintenance->name}}</td>
                  <td>{{$maintenance->room->building}}</td>
                  <td>{{$maintenance->room->number}}</td>
                  <td>{{$maintenance->customer->telephone}}</td>
                  <td>{{date('d-m-Y', strtotime($maintenance->created_at))}}</td>
                  @if($maintenance->status == 'เสร็จสิ้น')
                  <td><h5><span class="badge badge-success">{{$maintenance->status}}</span></h5></td>   
                  @else 
                  <td><h5><span class="badge badge-danger">{{$maintenance->status}}</span></h5></td>   
                  @endif

                  
                 
				      <td>
              <div class="btn-group" role="group" aria-label="Basic example">
              <a href="/maintenance/edit/{{$maintenance->id}}" class="btn btn-warning">แก้ไข</a>
              <a href="/maintenance/delete/{{$maintenance->id}}" class="btn btn-danger">ลบ</a></div></td>
                </tr>
                @endforeach
                
               
              </tbody>
				<div class="row">
        
				
            </table>
            <br>
				<div class="col-xs-12 text-center">
          
            <a href="/maintenance/create">
            <button class="btn btn-success">เพิ่มข้อมูล</button>
            </a>
          
        </div>
      </div>
          </div>
@endsection