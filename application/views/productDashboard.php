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


	<div class="row top50">

		<div class="col-sm-3 col-sm-offset-1">
			<!-- <a href="/profile"><button class='btn btn-lg btn-warning btn-block'>Profile</button></a> -->
		</div>
			<!-- <a href="#"><button class='btn btn-primary'>Promotions (inactive)</button></a> -->
		<div class="col-sm-4">
			<a href="/dashboard"><button class='btn btn-lg btn-primary btn-block'>Home</button></a>
		</div>
		<div class="col-sm-3" >
			<a href="/logout"><button class='btn btn-lg btn-danger btn-block'>Logout</button></a>	
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
<?php 		foreach($products as $product)
			{
?>				<div class="col-sm-3">
					<?= $product['name']; ?>
					<?= $product['description']; ?>
					<?= $product['collection']; ?>
					<?= $product['type']; ?>
					<img src="<?= $product['file_path'];?>" height="50" width="50">
					<?= $product['finish']; ?>
				</div>
<?php		}
?>
	</div>


	<!-- div class="row top50">
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
 -->
<!-- END PRODUCT VIEW TO CUSTOM TOOL -->
</div>
</body>
</html>