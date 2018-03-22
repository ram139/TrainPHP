<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'config.php';

$sql = 'SELECT * 
		FROM history';
		
include 'query.php';
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
    
	<h1>Travel History</h1>
	<table class="data-table">
		
		<thead>
			<tr>
				<th>ID</th>
                                <th>Date</th>
				<th>Train no</th>
				<th>Train Name</th>
				
				<th>SourceStation</th>
                                <th>DestinationStation</th>
                                <th>ArrivalTime</th>
                                <th>DepartureTime</th>
			</tr>
		</thead>
		<tbody>
		<?php
		
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['ID'].'</td>
                                        <td>'.$row['Date'].'</td>
					<td>'.$row['Train no'].'</td>
                                        <td>'.$row['Train name'].'</td>
                                        
                                        <td>'.$row['SourceStation'].'</td>
                                        <td>'.$row['DestinationStation'].'</td>
                                        <td>'.$row['ArrivalTime'].'</td>
                                        <td>'.$row['DepartureTime'].'</td>
                                          
					
			</tr>';
			
			
		}?>
                    
                    
		</tbody>
		<a href="Home.php" class="btn btn-primary">Home</a>
	</table>
        
        
        
</body>
</html>



