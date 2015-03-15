<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Show Order</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/dashboard.css">
</head>

<body>

	<div class="container-fluid viewport">
		
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<img src="././../../../assets/img/lvl_logo_6.png" class="img-responsive center-block">
			</div>
			<div class="col-sm-8 col-sm-offset-2" style="margin-top:25px;">
				<p class="headTag">Exclusive Distributor of <span style="color:rgb(238,34,43);">Meljac</span> in North America</p>
			</div>
		</div>

		<div class="row navbar">
			<div class="col-sm-4 col-sm-offset-4">
				<a href="/dashboard"><button class='btn btn-md btn-block'>Back to My Orders</button></a>
			</div>
		</div>


		<div class="row myOrders">
			<div class='col-sm-10 col-sm-offset-1'>
				<h2 style="text-align:center;">Project Name</h2>
				<table class='table table-bordered table-hover top50'>
					<thead>
						<th>Reference No</th>
						<th>Note</th>
						<th>Quantity</th>
						<th>Cutsheet</th>
					</thead>
			<?php	foreach($productitems as $productitem)
					{
			?>			<tr>
							<td><?= $productitem['reference_no']?></td> 
							<td><?= $productitem['note']?></td>
							<td><?= $productitem['quantity']?></td>
							<td><a href="././../../../pdf/<?= $productitem['pdf'];?>.pdf">PDF Download</a></td>
						</tr>
			<?php	}
			?>	</table>
			</div>
		</div>
	</div>
	
</body>
</html>