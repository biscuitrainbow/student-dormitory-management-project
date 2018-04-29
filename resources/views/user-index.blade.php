@extends('layout') 
@section('content')
<h2>รายการผู้ใช้</h2><br>
<user-page inline-template>
  <div class="table-responsive">
    <table class="table table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>ชื่อ</th>
          <th>นามสกุล</th>
          <th>Username</th>
          <th>จัดการข้อมูล</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$user->first_name}}</td>
          <td>{{$user->last_name}}</td>
          <td>{{$user->username}}</td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="/user/edit/{{$user->id}}" class="btn btn-warning">แก้ไข</a>
              {{-- <a href="/user/delete/{{$user->id}}" class="btn btn-danger">ลบ</a> --}}
              <a @click="remove({{$user->id}},'{{$user->first_name}}')"  class="btn btn-danger">ลบ</a>
            </div>
          </td>
        </tr>
        @endforeach


      </tbody>
      <div class="row">


    </table>
    <br>
    <div class="col-xs-12 text-center">
      <a href="/user/create">
        <button class="btn btn-success">เพิ่มข้อมูล</button>
        </a>

    </div>
    <br>
    </div>
</user-page>

</div>
<script src="/js/app.js"></script>

@endsection