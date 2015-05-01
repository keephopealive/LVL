<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Custom Outlet</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
	<script src="/assets/js/jquery-1.11.2.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">


	<style>

	</style>
</head>
<body>
<div class="container-fluid">
	<!-- <div class="row top50">
		<div class="col-sm-2 col-sm-offset-2">
			<a href="/products" class='btn btn-lg btn-warning btn-block'>Browse Products</a>
		</div>
		<div class="col-sm-4">
			<a href="/dashboard"><button class='btn btn-lg btn-primary btn-block'>Home</button></a>
		</div>
		<div class="col-sm-2" >
			<a href="/logout"><button class='btn btn-lg btn-danger btn-block'>Logout</button></a>
		</div>
	</div> -->
	<div class="row top50">
		<h3 class="center-block" style="text-align:center;font-family: 'Cinzel', serif; font-weight:400;">Create a Custom Outlet</h3>
		<a href="/order/newOrder">Back</a>


	</div>
	<div class="row">
	<form method='post' action='/productitems/createProductitemOutlet' role="form" class="form-inline" id="createOrderForm">
		
	<!-- BEGIN 1ST ROW -->

		<div class="row top50 field">
				<!-- <div class="col-sm-10 col-sm-offset-1 tool">
				</div> -->
			<input type='hidden' name='order_id' value='<?= $order_id; ?>'>
			<input type="hidden" name="price" value="F">

	<!-- COLLECTION -->
			<div class="col-xs-4 col-sm-2 col-sm-offset-2 cataBox" id="collection">
				<h4>Collection</h4>
				<div class="collection"> <!-- FINISH OPTIONS DIV -->
					<select name="collection" class="form-control selectwidthauto collection">
						<option class="collection" value="C">CLASSIQUE</option>
						<option class="collection" value="S">SOL</option>
						<option class="collection" value="SPE">CUISINE</option>
					</select>
				</div>
			</div>
	<!-- END COLLECTION -->

	<!-- SIZE -->
			<div class="col-xs-4 col-sm-2 col-sm-offset-1 cataBox">
				<h4>Plate Size</h4>
				<div class="size">	<!-- APPENDING SIZE OPTIONS -->
					<div class='radio padRad1'>
						<label>
							<input type='radio' name='size' orientation='horizontal' class='size' value='3008'>82 x 82 (Single)
						</label>
					</div>
					<br>
					<div class='radio padRad1'>
						<label>
							<input type='radio' name='size' orientation='horizontal' class='size' value='3000'>117 x 82 (Double)
						</label>
					</div>
					<br>
				</div>
			</div>
	<!-- END SIZE -->

	<!-- FINISH -->
			<div class="col-sm-2 col-sm-offset-1 cataBox">
				<h4>Finish</h4>
				<div class="orientation"> <!-- FINISH OPTIONS DIV -->
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
						<option value="SA">Nickel Noir Brillant</option>
						<option value="SB">Nickel Noir Mat</option>
						<option value="SC">Chromé Martelé</option>
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
						<option value="SN">Laiton Poli Verni</option>
					</select>
				</div>
			</div>
	<!-- END FINISH -->

		</div>
	<!-- END 1ST ROW -->

		<div class="clearfix visible-sm-block">
		</div>

	<!-- BEGIN 2ND ROW -->
		<div class="row field">

	<!-- EDGE / SCREW -->
			<div class="col-sm-2 col-sm-offset-2 cataBox edgeScrew">
				<div class='ES'>
					<div class='screw'>
						<h4>Edge</h4>
						<div class='radio padRad1'>
							<label>
								<input type='radio' class='screw' name='edge_screw' value='A'> Chamfer
							</label>
							<label>
								<input type='radio' class='screw' name='edge_screw' value='B'> Straight
							</label>
						</div>
					</div>
					<div class='edge'>
					</div>
				</div>
			</div>
	<!-- END EDGE / SCREW -->

	<!-- MECHANISM -->
			<div class="col-sm-2 col-sm-offset-1 cataBox mech">
				<!-- <h4>Mechanisms</h4> -->
				<!-- <div class="radio">
					<label>
						<input type="checkbox" class="matchFinish" name="matchFinish" value="YES"> Match with Finish?</input>
					</label>
				</div> -->
				<!-- <br>
				<select name="mechanism" class="mechanism form-control selectwidthauto">  --><!-- MECHANISM OPTIONS DIV -->
					<!-- <option>PLEASE CHOOSE SIZE FIRST</option>
				</select> -->
			</div>
	<!-- END MECHANISM  -->

	<!-- EDGE / SCREW -->
			<div class="col-sm-2 col-sm-offset-1 cataBox">
				<h4>Color</h4>
				<div class="color">	<!-- APPENDING SIZE OPTIONS -->
					<div class='radio padRad1'>
						<label>
							<input type='radio' name='color' class='color' value='BLACK'>Black
						</label>
					</div>
						<br>
					<div class='radio padRad1'>
						<label>
							<input type='radio' name='color' class='color' value='WHITE'>White
						</label>
					</div>
						<br>
				</div>
			</div>
	<!-- END EDGE / SCREW -->
		</div>
	<!-- END 2ND ROW -->

		<div class="clearfix visible-sm-block">
		</div>

		<!-- BEGIN 3RD ROW -->
		<div class="row field">

			<!-- BEGIN NOTES -->
			<div class='note col-sm-2 col-sm-offset-2 cataBox top50'>
				<h4>Room/Product Name</h4>
				<input class="fullInput" type="text" name="note" placeholder="i.e. Kitchen switch 1">
			</div>
			<!-- END NOTES -->

			<!-- BEGIN QUANTITY -->
			<div class='note col-sm-2 col-sm-offset-1 cataBox top50'>
				<h4>Quantity</h4>
				<input class="fullInput" type="number" name='quantity' value="1">
			</div>
			<!-- END QUANTITY -->

			<!-- BEGIN ENGRAVING -->
			<!-- <div class='note col-sm-2 col-sm-offset-1 cataBox top50'>
				<h4>Engraving</h4>
				<input class="fullInput" type="text" name='engraving'>
			</div> -->
			<!-- END ENGRAVING-->
			<div class='hiddenfield'>
			</div>

		</div>

		<!-- END 3RD ROW -->
		<div class="clearfix visible-sm-block">
		</div>
			
		<div class="clearfix visible-sm-block">
		</div>

	<!-- BEGIN SUBMIT ROW -->
		<div class="row top50">

			<div class='errors center-block' style="margin-bottom:50px;">
			</div>
			<div class="col-sm-4 col-sm-offset-4" style="vertical-align:bottom;">
				<button type="submit" class="btn saveBig btn-block">Save to Order</button>
			</div>
		</div>

<!-- 			<div class="clearfix visible-sm-block">
			</div> -->
	</form>
</div>
</div>

	<script type="text/javascript">
		$(document).ready(function(){
			sessionStorage.runnerA = 'C';
		});


		$(document).on('submit', 'form#createOrderForm', function(){
			$.post(
				$(this).attr('action'),
				$(this).serialize(),
				function(data){
					if(data.status == 'failed')
					{
						console.log('failed');
						$('div.errors').html(data.errors);
					}
					else
					{
						$('div.errors').html('');
						console.log("succeeded");
						window.location.replace("/order/newOrder");
					}
				},
				'json'
			);
			return false;
		});


		// POPULATING FINISH AND EDGE/SCREW FROM COLLECTION
		$(document).on('change', 'select.collection', function (e) {
			// Classique
			if ( $(this).val() == 'C' )
			{
				$('div.edgeScrew').html(""+
				"<div class='ES'>"+
					"<div class='screw'> "+
						"<h4>Edge</h4>"+
						"<div class='radio padRad1'>"+
							"<label>"+
							"<input type='radio' class='screw' name='edge_screw' value='A'> Chamfer"+ // classiq > chamfer => edge_screw = A
							"</label>"+
							"<label>"+
							"<input type='radio' class='screw' name='edge_screw' value='B'> Straight"+  // classiq > chamfer => edge_screw = B
							"</label>"+
						"</div>"+
					"</div>"+
					"<div class='edge'> "+
					"</div>"+
				"</div>");

				$('div.size').html(""+
				"<div class='radio padRad1'>"+
					"<label>"+
						"<input type='radio' name='size' orientation='horizontal' class='size' value='3008'>82 x 82 (Single)"+
					"</label>"+
				"</div>"+
				"<br>"+
				"<div class='radio padRad1'>"+
					"<label>"+
						"<input type='radio' name='size' orientation='horizontal' class='size' value='3000'>117 x 82 (Double)"+
					"</label>"+
				"</div>"+
				"<br>");
				$('div.mech').html("");
			}
			// Sol
			else if ( $(this).val() == 'S' )
			{
				$('div.edgeScrew').html(""+
				"<div class='ES'>"+
					"<div class='screw'> "+
						"<h4>Edge</h4>"+
						"<div class='radio padRad1'>"+
							"<label>"+
							"<input type='radio' checked class='screw' name='edge_screw' value='D'> Straight"+  // classiq > chamfer => edge_screw = D
							"</label>"+
						"</div>"+
					"</div>"+
					"<div class='edge'> "+
					"</div>"+
				"</div>");

				$('div.size').html(""+
				"<div class='radio padRad1'>"+
					"<label>"+
						"<input type='radio' name='size' orientation='horizontal' class='size' value='1400'>100 x 100 (3.9\"X3.9\") <br>Square"+
					"</label>"+
				"</div>"+
				"<br>"+
				"<div class='radio padRad1'>"+
					"<label>"+
						"<input type='radio' name='size' orientation='horizontal' class='size' value='1403'>100 mm (3.9\") <br> Single Round"+
					"</label>"+
				"</div>"+
				"<br>"+
				"<div class='radio padRad1'>"+
					"<label>"+
						"<input type='radio' name='size' orientation='horizontal' class='size' value='1401D'>180X100 (7\"X3.9\") <br> Double Outlet"+
					"</label>"+
				"</div>"+
				"<br>");
				$('div.mech').html("");
			}
			// Cuisine
			else if ( $(this).val() == 'SPE'  )
			{
				$('div.edgeScrew').html(""+
				"<div class='ES'>"+
					"<input type='hidden' class='screw' name='edge_screw' value='SPE' checked> "+  // classiq > chamfer => edge_screw = D
				"</div>");

				$('div.size').html(""+
				"<div class='radio padRad1'>"+
					"<label>"+
						"<input type='radio' name='size' orientation='horizontal' class='size' value='SPE1'>90mm (3.5\") <br> Round Base / Round Top"+
					"</label>"+
				"</div>"+
				"<br>"+
				"<div class='radio padRad1'>"+
					"<label>"+
						"<input type='radio' name='size' orientation='horizontal' class='size' value='SPE2'>90mm (3.5\") <br> Square Base / Round Top"+
					"</label>"+
				"</div>"+
				"<br>"+
				"<div class='radio padRad1'>"+
					"<label>"+
						"<input type='radio' name='size' orientation='horizontal' class='size' value='SPE3'>80mm (3.15\") <br> Square Base / Square Top"+
					"</label>"+
				"</div>"+
				"<br>");
				$('div.mech').html("");
			}
		});



		// POPULATING MECHANISMS FROM SIZE
		$(document).on('click', 'input.size', function(){
			// 82x82
			if( $(this).val() == '3008' )
			{
				$('div.mech').html(""+
				"<h4>Mechanisms</h4>"+
				"<select name='mechanism' class='form-control selectwidthauto'>"+
					"<option value='B0000010'>1 US Outlet no cover</option>"+
					"<option value='F0000010'>1 US Outlet with covers</option>"+
					"<option value='B0001210'>1 USB</option>"+
				"</select>");
			}
			// 82x117
			else if ( $(this).val() == '3000' )
			{
				$('div.mech').html(""+
				"<h4>Mechanisms</h4>"+
				"<select name='mechanism' class='form-control selectwidthauto'>"+
					"<option value='B0000020'>2 US Outlet without cover</option>"+
					"<option value='F0000020'>2 US Outlet with cover</option>"+
					"<option value='F0000260'>SPE</option>"+
					"<option value='B0001220'>2 USB</option>"+
					"<option value='B0000970'>1 RJ11</option>"+
					"<option value='B0000980'>2 RJ11</option>"+
					"<option value='B0000730'>1 RJ45/6 s/s PE</option>"+
				"</select>");
			}
			// 100x100 square
			else if ( $(this).val() == '1400' )
			{
				$('div.mech').html(""+
				"<input type='hidden' name='mechanism' value='F0000010'>");
			}
			// 100x100 round
			else if ( $(this).val() == '1403' )
			{
				$('div.mech').html(""+
				"<input type='hidden' name='mechanism' value='F0000010'>");
			}
			// 180x100 double
			else if ( $(this).val() == '1401D' )
			{
				$('div.mech').html(""+
				"<input type='hidden' name='mechanism' value='F0000020'>");
			}
			else
			{
				// ADD ALL OTHER MECHANISMS
				$('div.mech').html("");
			}

		});

































	</script>
</body>
</html>
