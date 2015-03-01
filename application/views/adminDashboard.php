<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/dashboard.css">
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
<div class="container-fluid viewport">

	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<img src="/assets/img/lvl_logo_6.png" class="img-responsive center-block">
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
			<a href="/admin/dashboard"><button class='btn btn-md btn-block'>Home</button></a>
		</div>
		<div class="col-sm-2">
			<a href="/logout"><button class='btn btn-md btn-block'>Logout</button></a>
		</div>
	</div>

<!-- BEGINS - ORDERS LIST  -->
	<div class="row myOrders">
		<div class='col-sm-10 col-sm-offset-1'>
			<h2 style="text-align:center;">Orders</h2>
			<table class='table table-bordered table-hover top50'>
			<thead>
				<th>Order ID</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>Client Name</th>
				<th>Status</th>
				<th>Admin</th>
				<th>Client</th>
				<th>Excel File</th>
				<th>Actions</th>
			</thead>

<!--?php-->
<!--include("config.inc.php");-->
<!--$item_per_page = 5;-->
<!--$get_total_rows = mysqli_fetch_array($orders); //total records-->
<!--//break total records into pages-->
<!--$pages = ceil($get_total_rows[0]/$item_per_page);-->
<!---->
<!--//create pagination-->
<!--$pagination = '';-->
<!--if($pages > 1)-->
<!--{-->
<!--	$pagination .= '<ul class="paginate">';-->
<!--	for($i = 1; $i<$pages; $i++)-->
<!--	{-->
<!--		$pagination .= '<li><a href="#" class="paginate_click" id="'.$i.'-page">'.$i.'</a></li>';-->
<!--	}-->
<!--	$pagination .= '</ul>';-->
<!--}-->
<!---->
<!--?-->




<?php 			foreach($orders as $order)
				{
?>					<tr>
						<td><?= $order['order_no']; ?></td>
						<td><?= date( 'F d, Y', strtotime( $order['orders_created_at']) ); ?></td>
						<td><?= date( 'M d, Y g:i A', strtotime( $order['orders_updated_at'])); ?></td>
						<td><?= $order['first_name']; ?> <?= $order['last_name']; ?></td>
						<td><?= $order['status']; ?></td>
						<td><?= $order['admin_note']; ?></td>
						<td><?= $order['client_note']; ?></td>
						<td><a href="../../excel/<?= $order['excelsheet']; ?>.xlsx">
<?php						if(strlen($order['project_name'])>0){
?>								<?= $order['project_name']; ?>
<?php						}else{
?>									<span>n/a</span>
<?php						}
?>						</a></td>
						<td><a href="/admin/orderEdit/<?= $order['order_id']; ?>" class='btn viewOrder'>Edit</a></td>
					</tr>	
<?php 			}
?>			</table>
		</div>
	</div>
<!-- ENDS - productitem LIST -->


	<!-- BEGINS - Catalog LIST  -->
	<div class="row myCatalogs">
		<div class='col-sm-10 col-sm-offset-1'>
			<h2 style="text-align:center;">Catalogs</h2>
			<table class='table table-bordered table-hover top50'>
				<thead>
					<th>Created At</th>
					<th>Delivery Method</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Company</th>
					<th>Email</th>
					<th>Profession</th>
					<th>Address</th>
					<th>City</th>
					<th>State</th>
					<th>Postal Code</th>
					<th>Country</th>
					<th>Contact Number</th>
				</thead>
				<tbody>
<?php 			if(count($catalogs) > 0 )
				{
					foreach($catalogs as $catalog)
					{
?>						<tr>
							<td><?= date('F d, Y', strtotime($catalog['catalog_created_at'])) ?></td>
							<td><?= $catalog['delivery_method']; ?></td>
							<td><?= $catalog['first_name']; ?></td>
							<td><?= $catalog['last_name']; ?></td>
							<td><?= $catalog['company_name']; ?></td>
							<td><?= $catalog['email']; ?></td>
							<td><?= $catalog['profession']; ?></td>
							<td><?= $catalog['address']; ?></td>
							<td><?= $catalog['city']; ?></td>
							<td><?= $catalog['state']; ?></td>
							<td><?= $catalog['postal_code']; ?></td>
							<td><?= $catalog['country']; ?></td>
							<td><?= $catalog['contact_number']; ?></td>
						</tr>
<?php 				}
				}
?>				</tbody>
			</table>
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
				<label for="collection" class="col-sm-2 control-label">Collection change to dropdown</label>
				
				<div class="col-sm-6">
					<input class="form-control" type='text' name='collection'  id="collection" placeholder="Collection">
				</div>
			</div>

			<div class="form-group">
				<label for="type" class="col-sm-2 control-label">Type change to drop down</label>
				
				<div class="col-sm-6">
					<input class="form-control" type='text' name='type'  id="type" placeholder="Type">
				</div>
			</div>
			<div class="form-group">
				<label for="size" class="col-sm-2 control-label">size change to drop down</label>
				
				<div class="col-sm-6">
					<input class="form-control" size='text' name='size'  id="size" placeholder="size">
				</div>
			</div>

			<div class="form-group">
				<label for="file_path" class="col-sm-2 control-label">File Path</label>
				
				<div class="col-sm-6">
					<input class="form-control" type='text' name='file_path'  id="file_path" placeholder="File Path">
				</div>
			</div>

			<div class="form-group">
				<label for="finish" class="col-sm-2 control-label">Finish change to dorpdown</label>
				
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