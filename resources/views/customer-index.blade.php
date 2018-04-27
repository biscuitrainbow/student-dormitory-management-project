@extends('layout') 
@section('content')
<form action="/customer/index">
  <input class="form-control form-control-dark w-100" type="text" name="query" placeholder="ค้นหา" aria-label="Search">
</form>
<div style="display:flex; justify-content:space-between">
  <h2>ข้อมูลผู้เช่า</h2>
  <a href="/customer/pdf">
    <button type="submit" class="btn btn-primary">PDF</button>
  </a>
</div>
<br>
<customer-page inline-template>
  <div class="table-responsive">
    <table class="table  table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>ชื่อ</th>
          <th>นามสกุล</th>
          <th>รหัสบัตรประชาชน</th>
          <th>ที่อยู่</th>
          <th>เบอร์ติดต่อ</th>
          <th>อีเมล</th>
          <th>สำเนาบัตรประชาชน</th>
          <th>สถานะ</th>
          <th>จัดการข้อมูล</th>
        </tr>
      </thead>
      <tbody>
        @foreach($customers as $customer)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$customer->first_name}}</td>
          <td>{{$customer->last_name}}</td>
          <td>{{$customer->id_card}}</td>
          <td>{{$customer->address}}</td>
          <td>{{$customer->telephone}}</td>
          <td>{{$customer->e_mail}}</td>
          <td>
            <a href="/storage/{{$customer->document}}">สำเนา</a>
          </td>
          @if($customer->status == 'อยู่ในระบบ')
          <td>
            <h5><span class="badge badge-success">{{$customer->status}}</span></h5>
          </td>
          @else
          <td>
            <h5><span class="badge badge-danger">{{$customer->status}}</span></h5>
          </td>
          @endif

          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="/customer/edit/{{$customer->id}}" class="btn btn-warning">แก้ไข</a>
              <a @click="remove({{$customer->id}})" class="btn btn-danger">ลบ</a></div>
          </td>
        </tr>
        @endforeach
      </tbody>
      <div class="row">
    </table>
    <div class="col-xs-12 text-center">
      <a href="/customer/create">
            <button class="btn btn-success">เพิ่มข้อมูล</button>
            </a>
    </div>
    <br>
    </div>
</customer-page>
</div>
<script src="/js/app.js"></script>

@endsection