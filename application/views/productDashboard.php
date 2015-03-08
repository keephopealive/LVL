<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/dashboard.css">
	<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">
		.tester123{
			height: 600px;
			/*outline: 1px solid black;*/
		}
		.hidden{
			display: hidden;
		}
	</style>
<div class="container-fluid viewport">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<a href="http://lvl-usa.com"><img src="assets/img/lvl_logo_6.png" class="img-responsive center-block"></a>
		</div>
		<div class="col-sm-8 col-sm-offset-2" style="margin-top:25px;">
			<p class="headTag">Exclusive Distributor of <span style="color:rgb(238,34,43);">Meljac</span> in North America</p>
		</div>
	</div>

	<div class="row navbar">
        <div class="col-sm-4">
            <a href="/about" class='btn btn-lg btn-block'>ABOUT</a>
        </div>
        <div class="col-sm-4">
            <a href="/products"><button class='btn btn-lg btn-block'>GALLERY</button></a>
        </div>
        <div class="col-sm-4">
            <a href="/catalog" class='btn btn-lg btn-block'>CATALOG</a>
        </div>
    </div>

	<!-- PRODUCT VIEW TO CUSTOM TOOL BEGIN -->
	<div class="row top50 gallerySort">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row">
				<div class="center-block">
					<!-- <div class="col-sm-2 col-sm-offset-1">
						<h3>View &nbsp;&nbsp;&nbsp;&nbsp;|</h3>
					</div> -->
					<div class="col-sm-3">
						<button class="btn orderAction1btn collection_btn btn-block">Collection</button>
					</div>
					<div class="col-sm-3">
					<button class="btn orderAction1btn type_btn btn-block">Product</button>
					</div>
					<div class="col-sm-3">
					<button class="btn orderAction1btn custom_btn btn-block">Custom</button>
					</div>
					<div class="col-sm-3"> <!-- Add -->
					<button class="btn orderAction1btn finish_btn btn-block">Finishes</button>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="sorting_types">
					<!--		Collection Sorting-->
					<div class="collection_group">
							<div class="row">
								<div class="col-sm-3">
									<button class="btn collectionSortBtn btn-block" id="retrieve_classique">Classique</button>
								</div>
								<div class="col-sm-2">
									<button class="btn collectionSortBtn btn-block" id="retrieve_ellipse">Ellipse</button>
								</div>
								<div class="col-sm-2">
									<button class="btn collectionSortBtn btn-block" id="retrieve_pierrot">Pierrot</button>
								</div>
								<div class="col-sm-2">
									<button class="btn collectionSortBtn btn-block" id="retrieve_limoges">Limoges</button>
								</div>
								<div class="col-sm-2">
									<button class="btn collectionSortBtn btn-block" id="retrieve_damier">Damier</button>
								</div>
							</div>
					</div>
					<!--		Type Sorting-->
					<div class="type_group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="row">
								<div class="col-sm-3">
									<button class="btn collectionSortBtn" id="retrieve_outlets">Outlets</button>
								</div>
								<div class="col-sm-3">
								<button class="btn collectionSortBtn" id="retrieve_keypads">Keypads</button>
								</div>
								<div class="col-sm-3">
									<button class="btn collectionSortBtn" id="retrieve_lamps">Lamps</button>
								</div>
								<div class="col-sm-3">
									<button class="btn collectionSortBtn" id="retrieve_doorbells">Doorbells</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


		<div class="row top50">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="products_list">
<?php
			foreach($products as $product)
			{
	?>				<div class="col-sm-4 tester123">
						<div class='productBlock' product_id="<?= $product['id'] ?>" product_title="<?= $product['name']; ?>" product_type="<?= $product['type']; ?>" product_size="<?= $product['size'];?>" product_collection="<?= $product['collection']; ?>" product_finish="<?= $product['finish']; ?>" product_description="<?= $product['description'];?>" >
							<p class="productTitle"><?= $product['name']; ?></p>
							<img src="<?= $product['file_path'];?>" class="img-responsive">
							<p class='productInfo'>Type | <?= $product['type']; ?></p>
							<p class='productInfo'>Size | <?= $product['size']; ?></p>
							<p class='productInfo'>Collection | <?= $product['collection']; ?></p>
							<p class='productInfo'>Finish | <?= $product['finish']; ?></p>
							<p class="productInfo"><?= $product['description']; ?></p>
						</div>
					</div>
<?php		}
?>				</div>
			</div>
		</div>


	<div class="row contactFaq">
	    <div class="col-sm-4">
	        <a href="/trade" class='lvl-nav btn btn-lg btn-block'>TRADE</a>
	    </div>
	    <div class="col-sm-4">
	        <a href="/faq" class='lvl-nav btn btn-lg btn-block'>FAQs</a>
	    </div>
	    <div class="col-sm-4">
	        <a href="/contact" class='lvl-nav btn btn-lg btn-block'>CONTACT</a>
	    </div>
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
						"<p class='productTitle'>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p class='productInfo'>Type | "+row.type+"</p>"+
						"<p class='productInfo'>Size | "+row.size+"</p>"+
						"<p class='productInfo'>Collection | "+row.collection+"</p>"+
						"<p class='productInfo'>Finish | "+row.finish+"</p>"+
						"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
						"<p class='productTitle'>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p class='productInfo'>Type | "+row.type+"</p>"+
						"<p class='productInfo'>Size | "+row.size+"</p>"+
						"<p class='productInfo'>Collection | "+row.collection+"</p>"+
						"<p class='productInfo'>Finish | "+row.finish+"</p>"+
						"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
						"<p class='productTitle'>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p class='productInfo'>Type | "+row.type+"</p>"+
						"<p class='productInfo'>Size | "+row.size+"</p>"+
						"<p class='productInfo'>Collection | "+row.collection+"</p>"+
						"<p class='productInfo'>Finish | "+row.finish+"</p>"+
						"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
					"<p class='productTitle'>"+row.name+"</p>"+
					"<img src="+row.file_path+" class='img-responsive'>"+
					"<p class='productInfo'>Type | "+row.type+"</p>"+
					"<p class='productInfo'>Size | "+row.size+"</p>"+
					"<p class='productInfo'>Collection | "+row.collection+"</p>"+
					"<p class='productInfo'>Finish | "+row.finish+"</p>"+
					"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
					"<p class='productTitle'>"+row.name+"</p>"+
					"<img src="+row.file_path+" class='img-responsive'>"+
					"<p class='productInfo'>Type | "+row.type+"</p>"+
					"<p class='productInfo'>Size | "+row.size+"</p>"+
					"<p class='productInfo'>Collection | "+row.collection+"</p>"+
					"<p class='productInfo'>Finish | "+row.finish+"</p>"+
					"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
					"<p class='productTitle'>"+row.name+"</p>"+
					"<img src="+row.file_path+" class='img-responsive'>"+
					"<p class='productInfo'>Type | "+row.type+"</p>"+
					"<p class='productInfo'>Size | "+row.size+"</p>"+
					"<p class='productInfo'>Collection | "+row.collection+"</p>"+
					"<p class='productInfo'>Finish | "+row.finish+"</p>"+
					"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
					"<p class='productTitle'>"+row.name+"</p>"+
					"<img src="+row.file_path+" class='img-responsive'>"+
					"<p class='productInfo'>Type | "+row.type+"</p>"+
					"<p class='productInfo'>Size | "+row.size+"</p>"+
					"<p class='productInfo'>Collection | "+row.collection+"</p>"+
					"<p class='productInfo'>Finish | "+row.finish+"</p>"+
					"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
					"<p class='productTitle'>"+row.name+"</p>"+
					"<img src="+row.file_path+" class='img-responsive'>"+
					"<p class='productInfo'>Type | "+row.type+"</p>"+
					"<p class='productInfo'>Size | "+row.size+"</p>"+
					"<p class='productInfo'>Collection | "+row.collection+"</p>"+
					"<p class='productInfo'>Finish | "+row.finish+"</p>"+
					"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
						"<p class='productTitle'>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p class='productInfo'>Type | "+row.type+"</p>"+
						"<p class='productInfo'>Size | "+row.size+"</p>"+
						"<p class='productInfo'>Collection | "+row.collection+"</p>"+
						"<p class='productInfo'>Finish | "+row.finish+"</p>"+
						"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
						"<p class='productTitle'>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p class='productInfo'>Type | "+row.type+"</p>"+
						"<p class='productInfo'>Size | "+row.size+"</p>"+
						"<p class='productInfo'>Collection | "+row.collection+"</p>"+
						"<p class='productInfo'>Finish | "+row.finish+"</p>"+
						"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
						"<p class='productTitle'>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p class='productInfo'>Type | "+row.type+"</p>"+
						"<p class='productInfo'>Size | "+row.size+"</p>"+
						"<p class='productInfo'>Collection | "+row.collection+"</p>"+
						"<p class='productInfo'>Finish | "+row.finish+"</p>"+
						"<p class='productInfo'>"+row.description+"</p>"+
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
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
						"<p class='productTitle'>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p class='productInfo'>Type | "+row.type+"</p>"+
						"<p class='productInfo'>Size | "+row.size+"</p>"+
						"<p class='productInfo'>Finish | "+row.finish+"</p>"+
						"<p class='productInfo'>"+row.description+"</p>"+
					"</div>"+
				"</div>");
				});
			},	
			'json'
		);	
		return false;
	});
	//	END TYPES SECTION --------------------------------------

	// RETRIEVE FINISH -----------------------------------------
	$(document).on('click', 'button.finish_btn', function(){
		$('.products_list').html(""+
			"<div class='row'>"+
				"<div class='col-sm-8 col-sm-offset-2 bottomBorder'>"+
				"</div>"+
				"<div class='row productIntro'>"+
					"<div class='col-sm-8 col-sm-offset-2'>"+
						"<h4 class=''> Meljac products come in the twenty-five standard finishes highlighted below. </h4>"+
					"</div>"+
					"<div class='col-sm-8 col-sm-offset-2'>"+
						"<p class='listTitle'>Custom options include:</p>"+
					"</div>"+
					"<div class='col-sm-8 col-sm-offset-2'>"+
						"<ul>"+
							"<li>Finish Matching – match any metallic finish based on a user-supplied flat sample</li>"+
							"<li>Powder Coating/Back-Painted Glass – match any RAL/Pantone color</li>"+
						"</ul>"+
					"</div>"+
				"</div>"+
			"</div>"+
			"<div class='row'>"+
				"<div class='col-sm-10 col-sm-offset-1'>"+
					"<img src='assets/img/FinishCatalog.png' class='img-responsive center-block'>"+
				"</div>"+
			"</div>");
	});
	// END FINISH

	// RETRIEVE CUSTOM -----------------------------------------
	$(document).on('click', 'button.custom_btn', function(){
		$.post(
			"/products/retrieveCustoms",
			function(rows){
				$('.products_list').html(""+
					"<div class='row'>"+
						"<div class='col-sm-8 col-sm-offset-2 bottomBorder'>"+
						"</div>"+
						"<div class='row productIntro'>"+
							"<div class='col-sm-8 col-sm-offset-2'>"+
								"<h4 class=''> Meljac specializes in making custom electrical plates for various applications.</h4>"+
							"</div>"+
							"<div class='col-sm-8 col-sm-offset-2'>"+
								"<p class='listTitle'>These include:</p>"+
							"</div>"+
							"<div class='col-sm-10 col-sm-offset-1 customList'>"+
								"<ul class='row'>"+
									"<li class='col-sm-3'>Keyless Entry / <br> Security Systems</li>"+
									"<li class='col-sm-3'>Elevator Plates</li>"+
									"<li class='col-sm-3'>Thermostats</li>"+
									"<li class='col-sm-3'>Data Centers</li>"+
								"</ul>"+
							"</div>"+
						"</div>"+
					"</div>");
				$.each(rows, function(index, row) {
					console.log(row);
					$('.products_list').append(""+
					"<div class='col-sm-4 tester123'>"+
					"<div class='productBlock'>"+
						"<p class='productTitle'>"+row.name+"</p>"+
						"<img src="+row.file_path+" class='img-responsive'>"+
						"<p class='productInfo'>Type | "+row.type+"</p>"+
						"<p class='productInfo'>Size | "+row.size+"</p>"+
						"<p class='productInfo'>Collection | "+row.collection+"</p>"+
						"<p class='productInfo'>Finish | "+row.finish+"</p>"+
						"<p class='productInfo'>"+row.description+"</p>"+
					"</div>"+
				"</div>");
				});
			},	
			'json'
		);	
		return false;
	});
	// END CUSTOM



	$(document).on('click', 'button.collection_btn', function(){
		$('.type_group').hide();
		$('.collection_group').show();
	});
	$(document).on('click', 'button.finish_btn', function(){
		$('.type_group').hide();
		$('.collection_group').hide();
	});
	$(document).on('click', 'button.type_btn', function(){
		$('.products_list').addClass('top25');
		$('.type_group').show();
		$('.collection_group').hide();
	});
	$(document).on('click', 'button.custom_btn', function(){
		$('.products_list').removeClass('top25');
		$('.type_group').hide();
		$('.collection_group').hide();
	});
	$(document).on('click', 'button.finish_btn', function(){
		$('.type_group').hide();
		$('.collection_group').hide();
	});
	$(document).ready(function(){
		$('.type_group').hide();
		$('.collection_group').hide();
	});

	/// Modal

	/* Content for Modal pop-up */
	$(document).on("click", "div.productBlock img", function(){
		console.log($(this).attr('src'));
		console.log($(this).parent('.productBlock').attr('product_title'));
		console.log($(this).parent('.productBlock').attr('product_type'));
		console.log($(this).parent('.productBlock').attr('product_size'));
		console.log($(this).parent('.productBlock').attr('product_collection'));
		console.log($(this).parent('.productBlock').attr('product_finish'));
		console.log($(this).parent('.productBlock').attr('product_description'));


		console.log($(this).attr('src'));
		var img_src = $(this).attr('src');

		$("div.modal div.modal-body").html(
			"<img src='"+img_src+"'>");
		$("#modal-gallery").modal("show");
	});

</script>

<!--	// Modal-->
	<div class="modal" id="modal-gallery" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1>TEST</h1>
					<button class="close" type="button" data-dismiss="modal">×</button>
					<h3 class="modal-title"></h3>
				</div>
				<div class="modal-body">
					<div id="modal-carousel" class="carousel">

						<div class="carousel-inner">
						</div>

						<a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
						<a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<!--	// End Modal-->

</body>
</html>