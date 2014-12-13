<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Client Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<div class="container-fluid">

	<div class="row top50">
		<div class="col-sm-3 col-sm-offset-1">
			<a href="/products" class='btn btn-lg btn-warning btn-block'>Browse Products</a>
		</div>
			<!-- <a href="#"><button class='btn btn-primary'>Promotions (inactive)</button></a> -->
		<div class="col-sm-4">
			<a href="/dashboard"><button class='btn btn-lg btn-primary btn-block'>Home</button></a>
		</div>
		<div class="col-sm-3" >
			<a href="/logout"><button class='btn btn-lg btn-danger btn-block'>Logout</button></a>	
		</div>
	</div>
<form method='post' action='/mpdftester'>
	<input type='submit' value="MPDF TESTER">
</form>
<!-- BEGINS - ORDERS LIST  -->
	<div class="row top50">
		<div class='col-sm-10 col-sm-offset-1'>
			<h2 class="center">My ProductItems</h2>
			<table class='table table-bordered top50'>
				<thead>
					<th>Order #</th>
					<th>Date Created</th>
					<th>Reference #</th>
					<th>Status</th>ProductItems
					<th>Note</th>
					<th>PDF</th>
				</thead>
<?php 			foreach($productitems as $productitem)
				{
?>					<tr>
						<td><?= $productitem['id']; ?></td>
						<td><?= $productitem['created_at']; ?></td>
						<td><?= $productitem['reference_no']; ?></td>
						<td><?= $productitem['status']; ?></td>
						<td><?= $productitem['note']; ?></td>
						<td><a href="">PDF FILE</a></td>
					</tr>				
<?php 			}
?>			</table>
		</div>
	</div>
<!-- ENDS - product_item LIST -->

<!-- BEGINS - CREATE NEW product_item -->
	<div class="row top50">
		<div class='col-sm-3 col-sm-offset-5'>
			<a href="/profile"><button class='btn btn-default btn-block'>Edit Profile</button></a>
		</div>
		<div class='col-sm-3'>
			<a href="/productitem/new" class='btn btn-primary btn-block'>Create New Order</a>
		</div>
	</div>
<!-- ENDS - CREATE NEW ORDER -->

<!-- BEGINS - USER INFO -->
	<div class="row top50">
		<div class="col-md-3 col-md-offset-1 center">
			<h4><strong>Currently Logged In</strong></h3>
		</div>
		<div class="col-md-3 col-md-offset-1">
			<h4>User ID: <?= $user['id'] ?></h4>
			<h4>First Name: <?= $user['first_name'] ?></h4>
			<h4>Last Name: <?= $user['last_name'] ?></h4>
		</div>
		<div class="col-md-3">
			<h4>Email: <?= $user['email'] ?></h4>
			<h4>Birthdate: <?= $user['birthdate'] ?></h4>		
		</div>
	</div>
<!-- ENDS - USER INFO -->

</div>
</body>
</html>