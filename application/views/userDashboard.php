<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Client Dashboard</title>
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
				<img src="assets/img/lvl_logo_6.png" class="img-responsive center-block">
			</div>
			<div class="col-sm-8 col-sm-offset-2" style="margin-top:25px;">
				<p class="headTag">Exclusive Distributor of <span style="color:rgb(238,34,43);">Meljac</span> in North America</p>
			</div>
		</div>

		<div class="row navbar">
			<div class="col-sm-4 col-sm-offset-1">
				<h4> Hello <?= $user['first_name'] ?> !</h4>
			</div>
			<div class="col-sm-2 col-sm-offset-2">
				<a href="/dashboard"><button class='btn btn-md btn-block'>Home</button></a>
			</div>
			<div class="col-sm-2">
				<a href="/logout"><button class='btn btn-md btn-block'>Logout</button></a>
			</div>
		</div>

		<div class="row newOrder">
			<div class="col-sm-4 col-sm-offset-4">
				<a href="/order/createOrder" class='btn btn-block lvl-nav'>Create New Order</a>
			</div>
		</div>

		<div class="row myOrders">
			<div class='col-sm-10 col-sm-offset-1'>
				<h2 style="text-align:center;">My Orders</h2>
				<table class='table table-bordered table-hover top50'>
					<thead>
						<th class="col-sm-2">LVL Order #</th>
						<th class="col-sm-2">Date Created</th>
						<th class="col-sm-2">Status</th>
						<th class="col-sm-4">Project Name</th>
						<th class="col-sm-2">Action</th>
					</thead>
<?php 			foreach($orders as $order)
				{
?>					<tr>
						<td><?= $order['order_no']; ?></td>
						<td><?= date( 'F d, Y', strtotime( $order['created_at']) ) ?></td>
						<td><?= $order['status']; ?></td>
						<td><?= $order['project_name']; ?></td>
						<td>
							<a href="/order/showOrder/<?= $order['id']; ?>"><button class='btn viewOrder'>View Order</button></a>
						</td>
					</tr>				
<?php 			}
?>				</table>
			</div>
		</div>

	</div>
</body>
</html>