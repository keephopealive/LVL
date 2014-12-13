<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin productitem EDIT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).on('submit', 'form#productitemUpdate', function(){
			$.post(
				$(this).attr('action'),
				$(this).serialize(),
				function(data){
					console.log(data.status);
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

<!-- BEGINS - productitemS LIST  -->
	<div class="row top50">
		<form id="productitemUpdate" method="post" action="/productitem/update">
			<div class='col-sm-10 col-sm-offset-1'>
				<h2 class="center">Admin productitem Edit</h2>
				<table class='table table-bordered top50'>
					<thead>
						<th>Date Created</th>
						<th>Reference #</th>
						<th>Client Name</th>
						<th>Client Note</th>
						<th>PDF</th>
					</thead>
					<form>
						<tr>  <!-- CHANGE ALL ORDER FIELDS INTO EDITABLE INPUTS -->
							<td><?= $productitem['created_at']; ?></td>
							<td><?= $productitem['reference_no']; ?></td>
							<td><?= $productitem['first_name']; ?> <?= $productitem['last_name']; ?></td>
							<td><?= $productitem['note']; ?></td>
							<td><a href="">PDF FILE</a></td>
						</tr>	
					</form>
				</table>


				<table class="table top50">
					<thead>
						<th>Status</th>
						
						<th>Admin Note</th>
						<th>Actions</th>
					</thead>
					<tr>
							<input type="hidden" name="productitem_id" value="<?= $productitem['id']; ?>">
							<td>
								<select name="status">
									<?php
									if($productitem['status'] == 'Pending')
									{
	?>									<option value="Pending" selected>Pending</option>
										<option value="Processing" >Processing</option>
										<option value="Complete" >Complete</option>
	<?php							}
									else if($productitem['status'] == 'Processing')
									{
	?>									<option value="Pending">Pending</option>
										<option value="Processing" selected>Processing</option>
										<option value="Complete" >Complete</option>
	<?php
									}
									else if($productitem['status'] == 'Complete')
									{
	?>									<option value="Pending">Pending</option>
										<option value="Processing" >Processing</option>
										<option value="Complete" selected>Complete</option>
	<?php
									}
	?>							</select>
							</td>

							<td>
								<textarea name="admin_note" value="<?= $productitem['admin_note']; ?>"><?= $productitem['admin_note']; ?></textarea>
							</td>
							<td><input type='submit' value='Save' class='btn btn-success'></td>
					</tr>
				</table>
			</div>
		</form>
	</div>
<!-- ENDS - productitem LIST -->

<!-- BEGINS - CREATE NEW productitem -->
	<div class="row top50">
		<div class='col-sm-3 col-sm-offset-5'>
		</div>
		<div class='col-sm-3'>
			<!-- <a href="/productitems/new" class='btn btn-primary btn-block'>Create New productitem</a> -->
		</div>
	</div>
<!-- ENDS - CREATE NEW productitem -->
<!-- BEGINS - USER INFO -->
	<div class="row top50">
		<div class="col-md-3 col-md-offset-1 center">
			<h4><strong>Client Info</strong></h3>
		</div>
		<div class="col-md-3 col-md-offset-1">
			<h4>User ID: <?= $productitem['id'] ?></h4>
			<h4>First Name: <?= $productitem['first_name'] ?></h4>
			<h4>Last Name: <?= $productitem['last_name'] ?></h4>
		</div>
		<div class="col-md-3">
			<h4>Email: <?= $productitem['email'] ?></h4>
			<h4>Birthdate: <?= $productitem['birthdate'] ?></h4>		
		</div>
	</div>
<!-- ENDS - USER INFO -->

</div>
</body>
</html>