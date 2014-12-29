<html>
<head>
	<title>Admin Order Edit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<h3>This is where the admin can edit/view an order</h3>
	<a href="/admin/dashboard"><button class='btn btn-primary'>Dashboard</button></a>
	<a href="/logout"><button class='btn btn-danger'>Logout</button></a>	

	<table class='table table-bordered'>
		<thead>
			<th>Reference No</th>
			<th>Status</th>
			<th>Note</th>
			<th>Quantity</th>
		</thead>
<?php	foreach($productitems as $productitem)
		{
?>			<tr>
				<td><?= $productitem['reference_no']?></td> 
				<td><?= $productitem['status']?></td> 
				<td><?= $productitem['note']?></td> 
				<td><?= $productitem['quantity']?></td>
			</tr>
<?php	}
?>	</table>
</body>
</html>