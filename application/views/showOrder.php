<html>
<head>
	<title>Show Order</title>
</head>
<body>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<h3>Here we will show the client's order - but he wont be able to edit content as of now. This order is pending status from LVL</h3>
	<a href="/dashboard"><button class='btn btn-primary'>Dashboard</button></a>
	<table class='table table-bordered'>
		<thead>
			<th>Reference No</th>
			<th>Note</th>
			<th>Qunatity</th>
			<th>PDF</th>
		</thead>
<?php	foreach($productitems as $productitem)
		{
?>			<tr>
				<td><?= $productitem['reference_no']?></td> 
				<td><?= $productitem['note']?></td>
				<td><?= $productitem['quantity']?></td>
				<td>PDF LINK HERE</td>
			</tr>
<?php	}
?>	</table>	
</body>
</html>