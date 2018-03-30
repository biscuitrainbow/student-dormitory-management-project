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
</style>
</head>
<body>

<h2>All Room</h2>

<table>
<thead>
                <tr>
                  <th>#</th>
                  <th>Building</th>
                  <th>Number</th>
                  <th>Furniture</th>
                  <th>Status</th>
                </tr>
                @foreach($rooms as $room)
                <tr>
                  <td>{{$room->id}}</td>
                  <td>{{$room->building}}</td>
                  <td>{{$room->number}}</td>
                  <td>{{$room->furniture}}</td>
                  <td>{{$room->status}}</td>  
				  
                </tr>
                @endforeach
                
        
</table>

</body>
</html>
