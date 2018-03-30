@extends('layout') 
@section('content')

<div class="font-sans bg-grey-lighter flex flex-col min-h-screen">
  <div class="flex-grow container mx-auto sm:px-4 pt-6 pb-8">
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
      <div class="hidden lg:flex">
        <div class="w-1/3 text-center py-8 bg-green-lighter">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{$available_number}}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide"><a href="/room/index/">
              Room empty number</a>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{$customer_number}}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide"><a href="/customer/index/">
              All renter number</a>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8 bg-red-lighter">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{$maintenance_number}}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide"><a href="/maintenance/index/">
              Have not maintenance number</a>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8 bg-red-lighter">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{$invoice_number}}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide"><a href="/invoices">
              Unpaid number</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col"><br>
      <h3>Room - Available</h3><br>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Building</th>
              <th>Number</th>
              <th>Furniture</th>
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
      
      <h3>Maintenance - Not finished</h3><br>
      <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Namet</th>
                <th>Building</th>
                <th>Number</th>
                <th>Telephone</th>
                <th>Date</th>
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

        <h3>Invoice - Unpaid</h3><br>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Room</th>
                  <th>Name</th>
                  <th>Room_price</th>
                  <th>Internet_price</th>
                  <th>last_water_unit</th>
                  <th>Water_unit</th>
                  <th>Last_electricity_unit</th>
                  <th>Electricity_unit</th>
                  <th>Total_price</th>
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