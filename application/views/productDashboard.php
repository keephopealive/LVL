<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<body>
	<style type="text/css">
	.tester123{
		height: 600px;
		outline: 1px solid black;
	}
	.pages{

	}
	</style>
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
		<div class="col-sm-1 col-sm-offset-1">
			<h5>PRODUCTS</h5>
		</div>
		<div class="col-sm-2 center">
			<h5>PRODUCT Category</h5>
		</div>
		<div class="col-sm-8">
			<h3 class="">
				Categories:
				<a href="/products">All</a> | 
				<a href="" id="order_by_collection">Collections </a> |
				<a href="" id="order_by_finish">Finish </a> | 
				<a href="" id="order_by_type">Type </a> | 
			</h3>
		</div>
	</div>


			<div class="row products_list">
				<div>
<?php
			foreach($products as $product)
			{	
?>				<div class="col-sm-3 tester123">
					<div class=''>
						<p><?= $product['name']; ?></p>
						<img src="<?= $product['file_path'];?>" class="img-responsive">
						<p><?= $product['description']; ?></p>
						<p><?= $product['collection']; ?></p>
						<p><?= $product['type']; ?></p>
						<p><?= $product['finish']; ?></p>
					</div>
				</div>
<?php		}
?>				</div>
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
<script type="text/javascript">

	$(document).on('click', '#order_by_collection', function(){
		$.post(
			"/products/retrieveAllCollections",
			function(rows){
				$('.products_list').html("");
				$.each(rows, function(index, row) {
					console.log(row);
					$('.products_list').append(""+
					"<div class='col-sm-3 tester123'>"+
					"<div class=''>"+
						"<p>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p>"+row.description+"</p>"+
						"<p>"+row.collection+"</p>"+
						"<p>"+row.type+"</p>"+
						"<p>"+row.finish+"</p>"+
					"</div>"+
				"</div>");
				});
			},	
			'json'
		);	
		return false;
	});
	$(document).on('click', '#order_by_finish', function(){
		$.post(
			"/products/retrieveAllFinish",
			function(rows){
				$('.products_list').html("");
				$.each(rows, function(index, row) {
					console.log(row);
					$('.products_list').append(""+
					"<div class='col-sm-3 tester123'>"+
					"<div class=''>"+
						"<p>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p>"+row.description+"</p>"+
						"<p>"+row.collection+"</p>"+
						"<p>"+row.type+"</p>"+
						"<p>"+row.finish+"</p>"+
					"</div>"+
				"</div>");
				});
			},	
			'json'
		);	
		return false;
	});
	$(document).on('click', '#order_by_type', function(){
		$.post(
			"/products/retrieveAllType",
			function(rows){
				$('.products_list').html("");
				$.each(rows, function(index, row) {
					console.log(row);
					$('.products_list').append(""+
					"<div class='col-sm-3 tester123'>"+
					"<div class=''>"+
						"<p>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p>"+row.description+"</p>"+
						"<p>"+row.collection+"</p>"+
						"<p>"+row.type+"</p>"+
						"<p>"+row.finish+"</p>"+
					"</div>"+
				"</div>");
				});
			},	
			'json'
		);	
		return false;
	});

</script>
</body>
</html>