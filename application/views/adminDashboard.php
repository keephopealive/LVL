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
				if(data.status == 'success')
				{
					$('div.createProductDiv').html("Successful Product Creation.");
				}
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
					<th>Order #</th>
					<th>Date Created</th>
					<th>Reference #</th>
					<th>Client Name</th>
					<th>Status</th>
					<th>Note</th>
					<th>PDF</th>
					<th>Actions</th>
				</thead>
<?php 			foreach($productitems as $productitem)
				{
?>					<tr>
						<td><?= $productitem['id']; ?></td>
						<td><?= $productitem['created_at']; ?></td>
						<td><?= $productitem['reference_no']; ?></td>
						<td><?= $productitem['first_name']; ?> <?= $productitem['last_name']; ?></td>
						<td><?= $productitem['status']; ?></td>
						<td><?= $productitem['note']; ?></td>
						<td><a href="">PDF FILE</a></td>
						<td><a href="/admin/edit/<?= $productitem['id']; ?>" class='btn btn-warning'>Edit</a></td>			
					</tr>	
<?php 			}
?>			</table>
		</div>
	</div>
<!-- ENDS - productitem LIST -->

<div class="row top50">
	<div class='col-sm-7 col-sm-offset-5'>
		<div class="createProductDiv"></div>
		<h3>Add a product:</h3>
		<?= $this->session->flashdata('errors'); ?>
		<form class="form-horizontal" role="form" method='post' action='/admin/createProduct' id='createProduct'><br>
			<!-- Name: <input type='text' name='name' ><br>
			Description: <input type='text' name='description'><br>
			Collection: <input type='text' name='collection'><br>
			Type: <input type='text' name='type'><br>
			File Path:<input type='text' name='file_path'><br>
			Finish: <input type='text' name='finish'><br> -->

			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				
				<div class="col-sm-6">
					<input class="form-control" type='text' name='name'  id="name" placeholder="Name">
				</div>
			</div>

			<div class="form-group">
				<label for="description" class="col-sm-2 control-label">Description</label>
			
				<div class="col-sm-6">
					<input class="form-control" type='text' name='description'  id="description" placeholder="Description">
				</div>
			</div>

			<div class="form-group">
				<label for="collection" class="col-sm-2 control-label">Collection</label>
				
				<div class="col-sm-6">
					<input class="form-control" type='text' name='collection'  id="collection" placeholder="Collection">
				</div>
			</div>

			<div class="form-group">
				<label for="type" class="col-sm-2 control-label">Type</label>
				
				<div class="col-sm-6">
					<input class="form-control" type='text' name='type'  id="type" placeholder="Type">
				</div>
			</div>

			<div class="form-group">
				<label for="file_path" class="col-sm-2 control-label">File Path</label>
				
				<div class="col-sm-6">
					<input class="form-control" type='text' name='file_path'  id="file_path" placeholder="File Path">
				</div>
			</div>

			<div class="form-group">
				<label for="finish" class="col-sm-2 control-label">Finish</label>
				
				<div class="col-sm-6">
					<input class="form-control" type='text' name='finish'  id="finish" placeholder="Finish">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-2">
					<input type='submit' value="Add Product" class='btn btn-success pull-right'>
				</div>
			</div>
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