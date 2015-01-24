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
	.hidden{
		display: hidden;
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
		<div class="col-sm-12">
			<h3>Sort by:</h3>
			<button class="btn btn-default collection_btn">Collection</button>
			<button class="btn btn-default type_btn">Type</button>
			<button class="btn btn-default finish_btn">Finish</button>
		</div>
		<div class="sorting_types">
			<!--		Collection Sorting-->
			<div class="col-sm-12 collection_group">
				<h3 class="select_search_by_collection">
					<a href="" id="retrieve_classique">Classique</a> |
					<a href="" id="retrieve_ellipse">Ellipse</a> |
					<a href="" id="retrieve_pierrot">Pierrot</a> |
					<a href="" id="retrieve_limoges">Limoges</a>
					<a href="" id="retrieve_damier">Damier</a>
				</h3>
			</div>
			<!--		Type Sorting-->
			<div class="col-sm-12 type_group">
				<h3 class="select_search_by_type">
					<a href="" id="retrieve_outlets">Outlets</a> |
					<a href="" id="retrieve_keypads">Keypads</a> |
					<a href="" id="retrieve_lamps">Reading Lamps</a> |
					<a href="" id="retrieve_doorbells">Door Bells</a>
				</h3>
			</div>
			<!--		Finish Sorting-->
			<div class="col-sm-12 finish_group">
				<h3 class="select_search_by_finish">
					<a href="" id="retrieve_outlets">Finish A</a> |
					<a href="" id="retrieve_keypads">Finish B</a> |
				 	<a href="" id="retrieve_lamps">Finish C</a> |
					<a href="" id="retrieve_doorbells">Finish D</a>
				</h3>
			</div>
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


	// RETRIEVE COLLECTIONS SECTION ---------------------------------
	// CLASSIQUE
	$(document).on('click', '#retrieve_classique', function(){
		$.post(
			"/products/retrieveClassique",
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
	// ELLIPSE
	$(document).on('click', '#retrieve_ellipse', function(){
		$.post(
			"/products/retrieveEllipse",
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
	// Pierrot
	$(document).on('click', '#retrieve_pierrot', function(){
		$.post(
			"/products/retrievePierrot",
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
	// LIMOGES
	$(document).on('click', '#retrieve_limoges', function(){
		$.post(
			"/products/retrieveLimoges",
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
	// DAMIER
	$(document).on('click', '#retrieve_damier', function(){
		$.post(
			"/products/retrieveDamier",
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
	// END COLLECTIONS SECTION --------------------------------------


	//	RETRIEVE TYPES SECTION --------------------------------------
	$(document).on('click', '#retrieve_outlets', function(){
		$.post(
			"/products/retrieveOutlets",
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
	$(document).on('click', '#retrieve_keypads', function(){
		$.post(
			"/products/retrieveKeypads",
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
	$(document).on('click', '#retrieve_doorbells', function(){
		$.post(
			"/products/retrieveDoorbells",
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
	$(document).on('click', '#retrieve_lamps', function(){
		$.post(
			"/products/retrieveLamps",
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
	//	END TYPES SECTION --------------------------------------


	$(document).on('click', 'button.collection_btn', function(){
		$('.finish_group').hide();
		$('.type_group').hide();
		$('.collection_group').show();
//		$('select_search_by_collection').show();
	});
	$(document).on('click', 'button.finish_btn', function(){
		$('.finish_group').show();
		$('.type_group').hide();
		$('.collection_group').hide();
//		$('select_search_by_collection').show();
	});
	$(document).on('click', 'button.type_btn', function(){
		$('.finish_group').hide();
		$('.type_group').show();
		$('.collection_group').hide();
//		$('select_search_by_collection').show();
	});
	$(document).ready(function(){
		$('.finish_group').hide();
		$('.type_group').hide();
		$('.collection_group').hide();
	});

</script>
</body>
</html>