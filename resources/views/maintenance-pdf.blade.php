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

<h2>All Maintnance</h2>

<table >
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Buide</th>
<th>Number</th>
<th>Tel</th>
<th>Create Date</th>
<th>Status</th>
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
