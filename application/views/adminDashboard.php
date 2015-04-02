<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/jquery-1.11.2.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/dashboard.css">
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
				<th>Project Name</th>
				<th>Excel File</th>
				<th>Actions</th>
			</thead>

<?php 			foreach($orders as $order)
				{
//					echo "<pre>";
//					var_dump($order);
//					die('here');
?>					<tr>
						<td><?= $order['order_no']; ?></td>
						<td><?= date( 'F d, Y', strtotime( $order['orders_created_at']) ); ?></td>
						<td><?= date( 'M d, Y g:i A', strtotime( $order['orders_updated_at'])); ?></td>
						<td><?= $order['first_name']; ?> <?= $order['last_name']; ?></td>
						<td><?= $order['status']; ?></td>
						<td><?= $order['admin_note']; ?></td>
						<td><?= $order['project_name']; ?></td>
						<td><a href="../excel/<?= $order['excelsheet']; ?>.xlsx">
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
<?php
					foreach($catalogs as $catalog)
					{
?>						<tr>
							<td><?= date('F d, Y', strtotime($catalog['created_at'])) ?></td>
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
				<label for="collection" class="col-sm-2 control-label">Collection</label>
				
				<div class="col-sm-6">
					<select name="collection" class="form-control selectwidthauto collection">
						<option class="collection" value="C">CLASSIQUE</option>
						<option class="collection" value="E">ELLIPSE</option>
						<option class="collection" value="P">PIERROT</option>
						<option class="collection" value="L">LIMOGES</option>
						<option class="collection" value="K">DAMIER</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="type" class="col-sm-2 control-label">Type</label>
				
				<div class="col-sm-6">
					<select name="type" class="form-control selectwidthauto">
						<option class="type" value="Keypad">Keypad</option>
						<option class="type" value="Outlet">Outlet</option>
						<option class="type" value="Doorbell">Doorbell</option>
						<option class="type" value="Custom">Custom</option>
						<option class="type" value="Reading Lamp">Reading Lamp</option>
					</select>	
				</div>
			</div>
			<div class="form-group">
				<label for="size" class="col-sm-2 control-label">Size</label>
				
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
				<label for="finish" class="col-sm-2 control-label">Finish</label>
				
				<div class="col-sm-6">
					<select name="finish" class="form-control selectwidthauto">
						<option value="FA">Nickel Brossé</option>
						<option value="FB">Nickel Brillant</option>
						<option value="FC">Nickel Microbillé</option>
						<option value="FD">Chrome Mat</option>
						<option value="FE">Chrome Vif</option>
						<option value="FF">Canon de Fusil Anthracite</option>
						<option value="FG">Canon de Fusil Bleu Nuit</option>
						<option value="CA">Bronze Medaille Clair</option>
						<option value="CB">Bronze Medaille Clair Verni Mat</option>
						<option value="CC">Bronze Medaille Allemand</option>
						<option value="CD">Bronze Medaille Fonce</option>
						<option value="CE">Champagne</option>
						<option value="CF">Doré Patiné</option>
						<option value="CG">Laiton Poli Verni</option>
						<option value="CH">Laiton Poli Satiné</option>
						<option value="SA">NICKEL NOIR BRILLANT</option>
						<option value="SB">Nickel Noir Mat</option>
						<option value="SC">CHROME MARTELE</option>
						<option value="SD">Chrome Vibré</option>
						<option value="SE">Argent Patiné</option>
						<option value="SF">Chrome Microbillé</option>
						<option value="SG">Cuivre Patiné</option>
						<option value="SH">Cuivre Vielli Bouchonné</option>
						<option value="SI">Cuivre Satiné</option>
						<option value="SJ">Bronze Médaille Foncé Barège Brillant</option>
						<option value="SK">Dorure 24 Carats</option>
						<option value="SL">Microbillé Dorure 24 carats</option>
						<option value="SM">Microbillé Canon de Fusil Anthracite</option>
						<option value="SN">POLI VERNI OR MAT</option>
					</select>
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

</div>
</body>
</html>