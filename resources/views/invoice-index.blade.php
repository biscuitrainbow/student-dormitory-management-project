@extends('layout')
@section('content')
<form action="/invoices">
  <input class="form-control form-control-dark w-100" type="text" name="query" placeholder="ค้นหา" aria-label="Search">
</form>
<h2>ข้อมูลการชำระ</h2><br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ห้อง</th>
                  <th>ชื่อ - สกุล</th>
                  <th>ค่าห้อง</th>
                  <th>ค่าอินเตอร์เน็ต</th>
                  <th>ยูนิตน้ำเดือนก่อน	</th>
                  <th>ยูนิตน้ำ</th>
                  <th>ยูนิตไฟเดือนก่อน	</th>
                  <th>ยูนิตค่าไฟ</th>
                  <th>ค่าเช่าสุทธิ</th>
                  <th>สถานะ</th>
				          <th>จัดการข้อมูล</th>
                </tr>
              </thead>
              <tbody>
                @foreach($invoices as $invoice)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$invoice->room->building .' '. $invoice->room->number}}</td>
                  <td>{{$invoice->customer->first_name . ' ' . $invoice->customer->last_name}}</td>
                  <td>{{$invoice->room_price}}</td>
                  <td>{{$invoice->internet_price}}</td>
                  <td>{{$invoice->last_water_unit}}</td>
                  <td>{{$invoice->water_unit}}</td>
                  <td>{{$invoice->last_electricity_unit}}</td>
                  <td>{{$invoice->electricity_unit}}</td>
                  <td>{{$invoice->total}}</td>
                  @if($invoice->status == 'ชำระ')
                  <td><h5><span class="badge badge-success">{{$invoice->status}}</span></h5></td>   
                  @else 
                  <td><h5><span class="badge badge-danger">{{$invoice->status}}</span></h5></td>   
                  @endif

                     
				      <td>
              <div class="btn-group" role="group" aria-label="Basic example">
              <a href="/invoices/{{$invoice->id}}/edit" class="btn btn-warning">แก้ไข</a>
              <a href="/invoices/delete/{{$invoice->id}}" class="btn btn-danger">ลบ</a>
              <a href="/invoices/pdf/{{$invoice->id}}" class="btn btn-primary">PDF</a></div>
              </td>
                </tr>
                @endforeach
                
               
              </tbody>
				<div class="row">
        
				
            </table>
            <br>
				<div class="col-xs-12 text-center">
          
            <a href="/invoices/create">
            <button class="btn btn-success">เพิ่มข้อมูล</button>
            </a>
         </div>
         <br>
      </div>
          </div>
@endsection