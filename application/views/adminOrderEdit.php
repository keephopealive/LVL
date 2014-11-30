<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Order EDIT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).on('submit', 'form#orderUpdate', function(){
			$.post(
				$(this).attr('action'),
				$(this).serialize(),
				function(data){
					console.log(data);
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
			<h2 class="center">Admin Order Edit</h2>
			<table class='table table-bordered top50'>
				<thead>
					<th>Order # (Order ID)</th>
					<th>Date Created</th>
					<th>Reference #</th>
					<th>Client Name</th>
					<th>PDF</th>
				</thead>
				<form>
					<tr>  <!-- CHANGE ALL ORDER FIELDS INTO EDITABLE INPUTS -->
						<td><?= $order['id']; ?></td>
						<td><?= $order['created_at']; ?></td>
						<td><?= $order['reference_no']; ?></td>
						<td><?= $order['first_name']; ?> <?= $order['last_name']; ?></td>
						<td><a href="">PDF FILE</a></td>
					</tr>	
				</form>
			</table>


			<table class="table top50">
				<thead>
					<th>Status</th>
					<th>Note</th>
					<th>Admin Note</th>
					<th>Actions</th>
				</thead>
				<tr>
					<form id="orderUpdate" method="post" action="/order/update">
						<input type="hidden" name="order_id" value="<?= $order['id']; ?>">
						<td>
							<select name="status">
								<?php
								if($order['status'] == 'Pending')
								{
?>									<option value="Pending" selected>Pending</option>
									<option value="Processing" >Processing</option>
									<option value="Complete" >Complete</option>
<?php							}
								else if($order['status'] == 'Processing')
								{
?>									<option value="Pending">Pending</option>
									<option value="Processing" selected>Processing</option>
									<option value="Complete" >Complete</option>
<?php
								}
								else if($order['status'] == 'Complete')
								{
?>									<option value="Pending">Pending</option>
									<option value="Processing" >Processing</option>
									<option value="Complete" selected>Complete</option>
<?php
								}
?>							</select>
						</td>
						<td>
							<?= $order['note']; ?>	
						</td>
						<td>
							<textarea name="admin_note" value="<?= $order['admin_note']; ?>"><?= $order['admin_note']; ?></textarea>
						</td>
						<td><input type='submit' value='Save' class='btn btn-success'></td>
					</form>
				</tr>
			</table>
		</div>
	</div>
<!-- ENDS - ORDER LIST -->

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
			<h4><strong>Client Info</strong></h3>
		</div>
		<div class="col-md-3 col-md-offset-1">
			<h4>User ID: <?= $order['id'] ?></h4>
			<h4>First Name: <?= $order['first_name'] ?></h4>
			<h4>Last Name: <?= $order['last_name'] ?></h4>
		</div>
		<div class="col-md-3">
			<h4>Email: <?= $order['email'] ?></h4>
			<h4>Birthdate: <?= $order['birthdate'] ?></h4>		
		</div>
	</div>
<!-- ENDS - USER INFO -->

</div>
</body>
</html>