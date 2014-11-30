<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User - Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
	</style>
</head>
<body>
<div class="container-fluid">

	<div class="row top50">

		<div class="col-sm-3 col-sm-offset-1">
			<a href="/profile"><button class='btn btn-lg btn-warning btn-block'>Profile</button></a>
		</div>
			<!-- <a href="#"><button class='btn btn-primary'>Promotions (inactive)</button></a> -->
		<div class="col-sm-4">
			<a href="/dashboard"><button class='btn btn-lg btn-primary btn-block'>Home</button></a>
		</div>
		<div class="col-sm-3" >
			<a href="/logout"><button class='btn btn-lg btn-danger btn-block'>Logout</button></a>	
		</div>
	</div>

	<div class="row header">
		<div class="col-md-12">
			<div class='center'>
				<h1 class=''>User - Profile *For Development Use ONLY*</h1> 
			</div>
			<h3><strong>Currently Logged In</strong></h3>
			<h4>First Name: <?= $first_name ?></h4>
			<h4>Last Name: <?= $last_name ?></h4>
			<h4>Email: <?= $email ?></h4>
			<h4>Birthdate: <?= $birthdate ?></h4>		
		</div>
	</div>

	<div class='row'>
		<div class='col-xs-12'>
			<h2>Content</h2>
			<form method="post" action="/users/updateProfile">
				<center><h3>Edit Profile</h3></center>
				<?= $this->session->flashdata('update_msg'); ?>
				<h3><?= $this->session->flashdata('registration_msg'); ?></h3>
				<div class="form-group">
					<label class="inline">First Name:</label>
					<input type="text" name="first_name" value='<?= $first_name ?>' class="form-control">
				</div>
				<div class="form-group">
					<label class="inline">Last Name:</label>
					<input type="text" name="last_name" value='<?= $last_name ?>' class="form-control">
				</div>
				<div class="form-group right">
					<input type="submit" value="Update" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>