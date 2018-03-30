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

<h2>All Customer</h2>

<table>
<thead>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last name</th>
<th>ID Card</th>
<th>Address</th>
<th>Telephone</th>
<th>Email</th>
<th>Status</th> 
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
