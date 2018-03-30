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

<h2>All Contract</h2>

<table >
<thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Room</th>
                <th>Earnest_money</th>
                <th>Insurer_money</th>
                <th>Start_date</th>
                <th>End_date</th>
                <th>Witness_name</th>
                <th>Status</th>
                </tr>
                @foreach($contracts as $contract)
                <tr>
                <td>{{$contract->id}}</td>
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
