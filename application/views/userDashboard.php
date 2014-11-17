<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<div class="container-fluid">
	<div class="row header">
		<div class="col-md-6">
			<div class='center'>
				<h1 class=''>User - Dashboard *For Development Use ONLY*</h1> 
			</div>
		</div>
		<div class="col-md-6">
			<h3><strong>Currently Logged In</strong></h3><br>
			<h5>First Name: <?= $first_name ?></h5>
			<h5>Last Name: <?= $first_name ?></h5>
			<h5>Email: <?= $first_name ?></h5>
			<h5>Birthdate: <?= $first_name ?></h5>	
			<br>
			<a href="/user/dashboard"><button class='btn btn-primary'>Home</button></a>
			<a href="#"><button class='btn btn-primary'>Promotions (inactive)</button></a>
			<a href="/user/profile"><button class='btn btn-warning'>Profile</button></a>
			<a href="/logout"><button class='btn btn-danger'>Logout</button></a>	
		</div>
	</div>


<!-- PRODUCT VIEW TO CUSTOM TOOL BEGIN -->
	<div class="row top50">
		<div class="col-sm-3 col-sm-offset-1">
			<h5>PRODUCTS</h5>
		</div>
		<div class="col-sm-4 center">
			<h5>PRODUCT Category</h5>
		</div>
		<div class="col-sm-3">
			<h5 class="pull-right">Sort By: <a href="#">Name</a> | <a href="#">Collection</a>  | <a href="#">Finish</a> </h5>
		</div>
	</div>

	<div class="row top50">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row productGrid">
				<div class="col-sm-3 center">
					<a href=""><img src="/assets/img/Classic_80X80.png"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3 center">
					<a href=""><img src="/assets/img/Classic_80X80.png"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3 center">
					<a href=""><img src="/assets/img/Classic_80X80.png"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3 center">
					<a href=""><img src="/assets/img/Classic_80X80.png"></a>
					<p>Product Title</p>
				</div>
			</div>

			<div class="row productGrid">
				<div class="col-sm-3">
					<a href=""><img class="img-responsive"src="/assets/img/Collection_Damier_2_BP_80x80x3mm.jpg"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img class="img-responsive"src="/assets/img/Collection_Damier_2_BP_80x80x3mm.jpg"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img class="img-responsive"src="/assets/img/Collection_Damier_2_BP_80x80x3mm.jpg"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img class="img-responsive"src="/assets/img/Collection_Damier_2_BP_80x80x3mm.jpg"></a>
					<p>Product Title</p>
				</div>
			</div>

			<div class="row productGrid">
				<div class="col-sm-3">
					<a href=""><img class="img-responsive" src="/assets/img/Pierrot_Collection_White_Glass80X80.png"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img class="img-responsive" src="/assets/img/Pierrot_Collection_White_Glass80X80.png"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img class="img-responsive" src="/assets/img/Pierrot_Collection_White_Glass80X80.png"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img class="img-responsive" src="/assets/img/Pierrot_Collection_White_Glass80X80.png"></a>
					<p>Product Title</p>
				</div>
			</div>

			<div class="row productGrid">
				<div class="col-sm-3">
					<a href=""><img class="img-responsive" src="/assets/img/Limoges_Collection80X115.png"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img class="img-responsive" src="/assets/img/Limoges_Collection80X115.png"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img class="img-responsive" src="/assets/img/Limoges_Collection80X115.png"></a>
					<p>Product Title</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img class="img-responsive" src="/assets/img/Limoges_Collection80X115.png"></a>
					<p>Product Title</p>
				</div>
			</div>
		</div>
	</div>

<!-- END PRODUCT VIEW TO CUSTOM TOOL -->

<!-- CUSTOM TOOL BEGIN -->
	<div class='row'>
		<div class='col-sm-5 col-sm-offset-1'>
			<h3><?= $this->session->flashdata('profileUpdate_msg') ?></h3>
			<h3 style="margin-top:0px;">ORDERS</h3>
		</div>
		<div class="col-sm-5">
			<a href="" class='btn btn-primary pull-right'>Create a New Order</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<table class='table table-bordered'>
				<thead>
					<th>Number</th>
					<th>Description</th>
					<th>Code</th>
					<th>Status</th>
					<th>Actions</th>
					<th>Cut Sheet</th>
				</thead>
				<tbody>
					<td><center>1</center></td>
					<td>Flat Black 4x Switch</td>
					<td>FAS958320-XS</td>
					<td>APPROVED - In Production...</td>
					<td>
						<center>
							<a href="#" class='btn btn-warning'>Edit</a>
							<a href="#" class='btn btn-danger'>Delete</a>
						</center>
					</td>
					<td>
						<center>
							<a href="" class='btn btn-primary'>Download PDF</a>
						</center>
					</td>
				</tbody>
			</table>
		</div>
	</div>
<!-- CUSTOM TOOL END -->
</div>
</body>
</html>