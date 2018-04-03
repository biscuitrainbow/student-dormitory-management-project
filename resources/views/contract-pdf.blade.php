<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
@font-face {
  font-family: 'THSarabunNew';
  font-style: normal;
  font-weight: normal;
  src: url("{{asset('fonts/THSarabunNew/THSarabunNew.ttf')}}") format('truetype');
}

@font-face {
  font-family: 'THSarabunNew';
  font-style: normal;
  font-weight: normal;
  src: url("{{asset('fonts/THSarabunNew/THSarabunNew.ttf')}}") format('truetype');
}

@font-face {
  font-family: 'THSarabunNew';
  font-style: normal;
  font-weight: bold;
  src: url("{{asset('fonts/THSarabunNew/THSarabunNew Bold.ttf')}}") format('truetype');
}

body,td,tr,th,h4 {
  font-family : 'THSarabunNew'
}
</style>
</head>
<body>

<h2>All Contract</h2>

<table >
<thead>
                <tr>
                <th>#</th>
                <th>ชื่อ -สกุล</th>
                <th>ห้อง</th>
                <th>ค่ามัดจำ</th>
                <th>ค่าประกัน</th>
                <th>เริ่มสัญญา</th>
                <th>หมดสัญญา</th>
                <th>ชื่อผู้เช่าร่วม</th>
                <th>สถานะ</th>
                </tr>
                @foreach($contracts as $contract)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$contract->customer->first_name . ' ' . $contract->customer->last_name}}</td>
                <td>{{$contract->room->building .' '. $contract->room->number}}</td>
                <td>{{$contract->earnest_money}}</td>
                <td>{{$contract->insurer_money}}</td>
                <td>{{date('Y-m-d', strtotime($contract->start))}}</td>
                <td>{{date('Y-m-d', strtotime($contract->end))}}</td>
                <td>{{$contract->witness_name}}</td>
                <td>{{$contract->status}} 
				  
                </tr>
                @endforeach
                
        
</table>

</body>
</html>
