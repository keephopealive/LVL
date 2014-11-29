<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style type="text/css">
	.right{
		text-align: right;
	}
	</style>	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
	<div class='row'>
		<div class='col-xs-12'>
			<h3><?= $this->session->flashdata('logout_msg'); ?></h3>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-6">
			<form method="post" action="/registration">
				<h3>Register</h3>
				<h3><?= $this->session->flashdata('registration_msg'); ?></h3>
				<div class="form-group">
					<label class="inline">First Name:</label>
					<input type="text" name="first_name" class="form-control">
				</div>
				<div class="form-group">
					<label class="inline">Last Name:</label>
					<input type="text" name="last_name" class="form-control">
				</div>
				<div class="form-group">
					<label class="inline">Email:</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label class="inline">Password:</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label class="inline">Confirm Password:</label>
					<input type="password" name="confirm_password" class="form-control">
				</div>
				<div class="form-group">
					<label class="inline">Date of Birth:</label>
					<input type="date" name="birthdate" class="form-control">
				</div>
				<div class="form-group right">
					<input type="submit" value="Register" class="btn btn-default">
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<h3>Login</h3>
			<h3><?= $this->session->flashdata('login_msg'); ?></h3>
			<form method="post" action="/login">
				<div class="form-group">
					<label class="inline">Email:</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label class="inline">Password:</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group right">
					<input type="submit" value="Login" class="btn btn-default">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>