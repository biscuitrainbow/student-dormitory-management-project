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

<h2>ข้อมูลผู้เช่า</h2>

<table>
<thead>
<tr>
<th>#</th>
<th>ชื่อ</th>
<th>นามสกุล</th>
<th>รหัสบัตรประชาชน</th>
<th>ที่อยู่</th>
<th>เบอร์ติดต่อ</th>
<th>อีเมล</th>
<th>สถานะ</th> 
</tr>
                @foreach($customers as $customer)
                <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->first_name}}</td>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->id_card}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->telephone}}</td>
                <td>{{$customer->e_mail}}</td>
                <td>{{$customer->status}}</td>
				  
                </tr>
                @endforeach
                
        
</table>

</body>
</html>
