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

<h2>ข้อมูลการแจ้งซ่อม</h2>

<table >
<thead>
<tr>
<th>#</th>
<th>รายการ</th>
<th>อาคาร</th>
<th>เลขห้อง</th>
<th>เบอร์ติดต่อ</th>
<th>วันแจ้งซ่อม</th>
<th>สถานะ</th>
</tr>
                @foreach($maintenances as $maintenance)
                <tr>
                <td>{{$maintenance->id}}</td>
                  <td>{{$maintenance->name}}</td>
                  <td>{{$maintenance->room->building}}</td>
                  <td>{{$maintenance->room->number}}</td>
                  <td>{{$maintenance->customer->telephone}}</td>
                  <td>{{$maintenance->created_at}}</td>
                  <td>{{$maintenance->status}}</td>
				  
                </tr>
                @endforeach
                
        
</table>

</body>
</html>
