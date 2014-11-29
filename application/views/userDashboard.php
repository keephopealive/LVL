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
				<h1 class=''>User - Dashboard </h1> 
			</div>
			<h3><strong>Currently Logged In</strong></h3>
			<h4>User ID: <?= $user['id'] ?></h4>
			<h4>First Name: <?= $user['first_name'] ?></h4>
			<h4>Last Name: <?= $user['last_name'] ?></h4>
			<h4>Email: <?= $user['email'] ?></h4>
			<h4>Birthdate: <?= $user['birthdate'] ?></h4>		
		</div>
		<div class="col-md-6">
			<a href="/dashboard"><button class='btn btn-primary'>Home</button></a>
			<!-- <a href="#"><button class='btn btn-primary'>Promotions (inactive)</button></a> -->
			<a href="/profile"><button class='btn btn-warning'>Profile</button></a>
			<a href="/logout"><button class='btn btn-danger'>Logout</button></a>	
		</div>
	</div>

<!-- BEGINS - ORDERS LIST  -->
	<div class="row">
		<div class='col-xs-12'>
			<table class='table table-bordered'>
				<thead>
					<th>Order # (Order ID)</th>
					<th>Reference #</th>
					<th>Status</th>
					<th>Note</th>
					<th>PDF</th>
					<th></th>
				</thead>
<?php 			foreach($orders as $order)
				{
?>					<tr>
						<td><?= $order['id']; ?></td>
						<td><?= $order['reference_no']; ?></td>
						<td><?= $order['status']; ?></td>
						<td><?= $order['note']; ?></td>
						<td><a href="">PDF FILE</a></td>
						<td>
							<a href="order/edit/<?= $order['id'] ?>" class='btn btn-primary'>Edit</a>
							<a href="order/destroy/<?= $order['id'] ?>" class='btn btn-danger'>Destroy</a>
						</td>
					</tr>				
<?php 			}
?>			</table>
		</div>
	</div>
<!-- ENDS - ORDER LIST -->

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
	<div class="row top50 tool">
		<div class="col-sm-10 col-sm-offset-1">
			<form method='post' action='custom' role="form" class="form-inline">
				<input type="hidden" name="price" value="F">
				
				<div class="col-sm-4" id="orientation">
					<h4>Orientation</h4>
					<label>
						<input type="radio" name="plate_orientation" value=""> Horizontal
					</label>
					<br>
					<label>
						<input type="radio" name="plate_orientation" value=""> Vertical
					</label>
				</div>

				<div class="col-sm-4">
					<h4>Plate Size</h4>
					<label>
						<input type="radio" name="plate_size" value="3008"> 82x82
					</label>
					<br>
					<label>
						<input type="radio" name="plate_size" value="3001" orientation="horizontal"> 117x82
					</label>
					<br>
					<label>
						<input type="radio" name="plate_size" value="3002" orientation="horizontal"> 144x82
					</label>
					<br>
					<label>
						<input type="radio" name="plate_size" value="3000" orientation="vertical"> 82x117 
					</label>
					<br>
					<label>
						<input type="radio" name="plate_size" value="3003" orientation="vertical"> 82x144
					</label>
				</div>
	
				<div class="col-sm-4" id="collection">
					<h4>Collection</h4>
					<label>
						<input type="radio" name="collection" value="C"> Classique
					</label>
					<br>
					<label>
						<input type="radio" name="collection" value="E"> Elipse
					</label>
					<br>
					<label>
						<input type="radio" name="collection" value="P"> Pierrot
					</label>
					<br>
					<label>
						<input type="radio" name="collection" value="L"> Limoges
					</label>
					<br>
					<label>
						<input type="radio" name="collection" value="K"> Damier
					</label>
				</div>
				
				<div class="col-sm-4">
					<h4>Finish</h4>

						<select name="finish" class="form-control selectwidthauto">
							<option value="FA">NICKEL BROSSE</option>
							<option value="FB">NICKEL BRILLANT </option>
							<option value="FC">MICROBILLE NICKEL </option>
							<option value="FD">CHROME MAT</option>
							<option value="FE">CHROME VIF </option>
							<option value="FF">CANON DE FUSIL ANTHRACITE</option>
							<option value="FG">CANON DE FUSIL BLEU NUIT</option>
							<option value="CA">BM CLAIR</option>
							<option value="CB">BM CLAIR VERNI MAT</option>
							<option value="CC">BM ALLEMAND</option>
							<option value="CD">BM FONCE</option>
							<option value="CE">CHAMPAGNE</option>
							<option value="CF">DORE PATINE</option>
							<option value="CG">LAITON POLI VERNI </option>
							<option value="CH">LAITON POLI SATINE</option>
							<option value="SA">NICKEL NOIR BRILLANT</option>
							<option value="SB">NICKEL NOIR MATTE</option>
							<option value="SC">CHROME MARTELE</option>
							<option value="SD">CHROME VIBRE </option>
							<option value="SE">ARGENT PATINE</option>
							<option value="SF">MICROBILLE CHROME </option>
							<option value="SG">CUIVRE PATINE</option>
							<option value="SH">CUIVRE VIEILLI BOUCHONNE </option>
							<option value="SI">CUIVRE SATINE</option>
							<option value="SJ">BM FONCE BAREGE BRILLANT</option>
							<option value="SK">Dorure 24 carats</option>
							<option value="SL">Microbillé dorure 24 carats</option>
							<option value="SM">Microbillé CF anthracite</option>
							<option value="SN">POLI VERNI OR MAT</option>
						</select>
					</label>					
				</div>
				<div class="col-sm-4">
					<h4>Mechanisms</h4>
					<label>
						<input type="radio" name="mechanism" value="A1100010"> default
					</label>
				</div>
				<div class="col-sm-4">
					<h4>Edge/Screw</h4>
					<label>
						<input type="radio" name="edge_screw" value="X"> default
					</label>
					
					<button type="submit" class="btn btn-default pull-right top50">Submit</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row top50">
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