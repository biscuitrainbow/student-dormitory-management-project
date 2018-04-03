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

<h2>ข้อมูลห้องพัก</h2>

<table>
<thead>
                <tr>
                  <th>#</th>
                  <th>อาคาร</th>
                  <th>เลขห้อง</th>
                  <th>เฟอร์นิเจอร์</th>
                  <th>สถานะ</th>
                </tr>
                @foreach($rooms as $room)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$room->building}}</td>
                  <td>{{$room->number}}</td>
                  <td>{{$room->furniture}}</td>
                  <td>{{$room->status}}</td>  
				  
                </tr>
                @endforeach
                
        
</table>

</body>
</html>
