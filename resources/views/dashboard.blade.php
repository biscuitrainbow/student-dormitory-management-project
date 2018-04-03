@extends('layout') 
@section('content')

<div class="font-sans bg-grey-lighter flex flex-col min-h-screen">
  <div class="flex-grow container mx-auto sm:px-4 pt-6 pb-8">
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
      <div class="hidden lg:flex">
        <div class="w-1/3 text-center py-8">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{$available_number}}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide"><a href="/room/index/">
              จำนวนห้องว่างทั้งหมด</a>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{$customer_number}}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide"><a href="/customer/index/">
              จำนวนผู้เช่าทั้งหมด</a>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8 bg-red-lighter">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{$maintenance_number}}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide"><a href="/maintenance/index/">
              จำนวนค้างซ่อมทั้งหมด</a>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8 bg-red-lighter">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{$invoice_number}}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide"><a href="/invoices">
              จำนวนค้างชำระทั้งหมด</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col"><br>
      <h3>รายการห้องว่าง</h3><br>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>อาคาร</th>
              <th>เลขห้อง</th>
              <th>เฟอร์นิเจอร์</th>
            </tr>
          </thead>
          <tbody>
            @foreach($rooms as $room)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$room->building}}</td>
              <td>{{$room->number}}</td>
              <td>{{$room->furniture}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div><br>
      
      <h3>รายการแจ้งซ่อม</h3><br>
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
              </tr>
            </thead>
            <tbody>
              @foreach($maintenances as $maintenance)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$maintenance->name}}</td>
                <td>{{$maintenance->room->building}}</td>
                <td>{{$maintenance->room->number}}</td>
                <td>{{$maintenance->customer->telephone}}</td>
                <td>{{date('d-m-Y', strtotime($maintenance->created_at))}}</td>
              @endforeach
            </tbody>
          </table>
        </div><br>

        <h3>รายการค้างชำระ</h3><br>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ห้อง</th>
                  <th>ชื่อ - สกุล</th>
                  <th>ค่าห้อง</th>
                  <th>ค่าอินเตอร์เน็ต</th>
                  <th>ยูนิตน้ำเดือนก่อน</th>
                  <th>ยูนิตน้ำ</th>
                  <th>ยูนิตไฟเดือนก่อน</th>
                  <th>ยูนิตค่าไฟ</th>
                  <th>ค่าเช่าสุทธิ</th>
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
                </tr>
                @endforeach
             </tbody>
            </table>
          </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection