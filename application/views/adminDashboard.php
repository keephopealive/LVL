<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).on('submit', '#createProduct', function(){
		$.post(
			$(this).attr('action'),
			$(this).serialize(),
			function(data){
				console.log('data', data);
			},
			'json'
		);
		return false;
	});



	</script>
</head>
<body>
<div class="container-fluid">

	<div class="row top50">
		<div class="col-sm-3 col-sm-offset-1">
			<!-- <a href="/profile"><button class='btn btn-lg btn-warning btn-block'>Profile</button></a> -->
		</div>
			<!-- <a href="#"><button class='btn btn-primary'>Promotions (inactive)</button></a> -->
		<div class="col-sm-4">
			<a href="/admin/dashboard"><button class='btn btn-lg btn-primary btn-block'>Home</button></a>
		</div>
		<div class="col-sm-3" >
			<a href="/logout"><button class='btn btn-lg btn-danger btn-block'>Logout</button></a>	
		</div>
	</div>

<!-- BEGINS - ORDERS LIST  -->
	<div class="row top50">
		<div class='col-sm-10 col-sm-offset-1'>
			<h2 class="center">Admin Dashboard</h2>
			<table class='table table-bordered top50'>
				<thead>
					<th>Order # (Order ID)</th>
					<th>Date Created</th>
					<th>Reference #</th>
					<th>Client Name</th>
					<th>Status</th>
					<th>Note</th>
					<th>PDF</th>
					<th>Actions</th>
				</thead>
<?php 			foreach($orders as $order)
				{
?>					<tr>
						<td><?= $order['id']; ?></td>
						<td><?= $order['created_at']; ?></td>
						<td><?= $order['reference_no']; ?></td>
						<td><?= $order['first_name']; ?> <?= $order['last_name']; ?></td>
						<td><?= $order['status']; ?></td>
						<td><?= $order['note']; ?></td>
						<td><a href="">PDF FILE</a></td>
						<td><a href="/admin/edit/<?= $order['id']; ?>" class='btn btn-warning'>Edit</a></td>			
					</tr>	
<?php 			}
?>			</table>
		</div>
	</div>
<!-- ENDS - ORDER LIST -->

<div class="row top50">
	<div class='col-sm-12'>
		<h3>Add a product:</h3>
		<?= $this->session->flashdata('errors'); ?>
		<form method='post' action='/admin/createProduct' id='createProduct'><br>
			Name: <input type='text' name='name' ><br>
			Description: <input type='text' name='description'><br>
			Collection: <input type='text' name='collection'><br>
			Type: <input type='text' name='type'><br>
			File Path:<input type='text' name='file_path'><br>
			Finish: <input type='text' name='finish'><br>
			<input type='submit' value="Add Product" class='btn btn-success'>
		</form>
	</div>
</div>

<!-- BEGINS - CREATE NEW ORDER -->
	<div class="row top50">
		<div class='col-sm-3 col-sm-offset-5'>
		</div>
		<div class='col-sm-3'>
			<!-- <a href="/orders/new" class='btn btn-primary btn-block'>Create New Order</a> -->
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