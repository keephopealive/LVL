<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style type="text/css">
	.right{
		text-align: right;
	}
	strong{
		color: green;
	}
	.nav {
		text-align: center;
	}
	.nav button{
		margin-left: 15px;
		margin-right: 15px;
	}
	.center {
		text-align: center;
	}
	.center-this{
	}
	table{
		margin: 5px;
		padding: 5px;
	}

	</style>	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
	<div class="row header">
		<div class="col-md-12">
			<div class='center'>
				<h1 class=''>User - Dashboard *For Development Use ONLY*</h1> 
			</div>
			<h3><strong>Currently Logged In</strong></h3>
			<h4>First Name: <?= $first_name ?></h4>
			<h4>Last Name: <?= $first_name ?></h4>
			<h4>Email: <?= $first_name ?></h4>
			<h4>Birthdate: <?= $first_name ?></h4>		
		</div>
	</div>
	<div class='row nav'>
		<div class='col-xs-12'>
			<a href="/user/dashboard"><button class='btn btn-primary'>Home</button></a>
			<a href="#"><button class='btn btn-primary'>Promotions (inactive)</button></a>
			<a href="/user/profile"><button class='btn btn-warning'>Profile</button></a>
			<a href="/logout"><button class='btn btn-danger'>Logout</button></a>
		</div>
	</div>
	<div class='row'>
		<div class='col-xs-12'>
			<h3><?= $this->session->flashdata('profileUpdate_msg') ?></h3>
			<h2>Content</h2>
			<a href="" class='btn btn-primary'>Create a New Order</a>
			<table class='table table-bordered'>
				<thead>
					<th>Number</th>
					<th>Description</th>
					<th>Code</th>
					<th>Status</th>
					<th>Actions</th>
				</thead>
				<tbody>
					<td>1</td>
					<td>Flat Black 4x Switch</td>
					<td>FAS958320-XS</td>
					<td>APPROVED - In Production...</td>
					<td>
						<center>
							<a href="#" class='btn btn-warning'>Edit</a>
							<a href="#" class='btn btn-danger'>Destroy</a>
						</center>
					</td>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>