<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Custom Keypad</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


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
		<h3 class="center-block" style="text-align:center;font-family: 'Cinzel', serif; font-weight:400;">Create a Custom Keypad</h3>
		
		

	</div>
	<div class="row">
	<form method='post' action='/productitems/createProductitem' role="form" class="form-inline" id="createOrderForm">
		
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
						<option class="collection" value="E">ELLIPSE</option>
						<option class="collection" value="P">PIERROT</option>
						<option class="collection" value="L">LIMOGES</option>
						<option class="collection" value="K">DAMIER</option>
					</select>
				</div>
			</div>
	<!-- END COLLECTION -->

	<!-- ORIENTATION -->
			<div class="col-xs-4 col-sm-2 col-sm-offset-1 cataBox">
				<h4>Orientation</h4>
				<div class="orientation"> <!-- ORIENTATION OPTIONS DIV -->
					<div class="radio padRad1">
						<label>
							<input type='radio' name='orientation' class='horizontal' value="horizontal">  Horizontal
						</label>
					</div>
					<br>
					<div class="radio padRad1">
						<label>
							<input type='radio' name='orientation' class='vertical' value="vertical">  Vertical
						</label>
					</div>
				</div>
			</div>
	<!-- END ORIENTATION -->

	<!-- SIZE -->
			<div class="col-xs-4 col-sm-2 col-sm-offset-1 cataBox">
				<h4>Plate Size</h4>
				<div class="size">	<!-- APPENDING SIZE OPTIONS -->
					<p style="text-align:center;">Select orientation first.</p>
				</div>
			</div>
	<!-- END SIZE -->

		</div>
	<!-- END 1ST ROW -->

		<div class="clearfix visible-sm-block">
		</div>

	<!-- BEGIN 2ND ROW -->
		<div class="row field">

	<!-- FINISH -->
			<div class="col-sm-2 col-sm-offset-2 cataBox">
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
						<option value="SA">NICKEL NOIR BRILLANT</option>
						<option value="SB">Nickel Noir Mat</option>
						<option value="SC">CHROME MARTELE</option>
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
						<option value="SN">POLI VERNI OR MAT</option>
					</select>
				</div>
			</div>
	<!-- END FINISH -->

	<!-- MECHANISM -->
			<div class="col-sm-2 col-sm-offset-1 cataBox mech">
				<h4>Mechanisms</h4>
				<!-- <div class="radio">
					<label>
						<input type="checkbox" class="matchFinish" name="matchFinish" value="YES"> Match with Finish?</input>
					</label>
				</div> -->
				<br>
				<select name="mechanism" class="mechanism form-control selectwidthauto"> <!-- MECHANISM OPTIONS DIV -->
					<option>PLEASE CHOOSE SIZE FIRST</option>
				</select>
			</div>
	<!-- END MECHANISM  -->

	<!-- EDGE / SCREW -->
			<div class="col-sm-2 col-sm-offset-1 cataBox">
				<div class="ES">
					<div class="screw"> <!-- EDGE & SCREW OPTIONS DIV -->
						<h4>Screw</h4>
						<div class='radio padRad1'>
							<label>
								<input type='radio' class='screw' name='screw' value='yes'> Visible Screws
							</label>
							<label>
								<input type='radio' class='screw' name='screw' value='no'> Hidden Screws
							</label>
						</div>
					</div>
					<div class="edge"> <!-- EDGE & SCREW OPTIONS DIV -->

					</div>
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
			<div class='note col-sm-2 col-sm-offset-1 cataBox top50'>
				<h4>Engraving</h4>
				<input class="fullInput" type="text" name='engraving'>
			</div>
	<!-- END ENGRAVING-->
			<div class='hiddenfield'>
			</div>

		</div>

	<!-- END 3RD ROW -->
		<div class="clearfix visible-sm-block">
		</div>

	<!-- BEGIN SUBMIT ROW -->
		<div class="row top50">

			<div class='errors center-block top50'>
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
		sessionStorage.runnerA == null;
// Piero
		if ( $(this).val() == 'P' )
		{
			$('div.edge').html("");
			$('div.screw').html("");
			$('div.screw').html(""+
				"<input type='hidden' name='edge_screw' value='C'>"
			);
			console.log("P");
			$('div.hiddenfield').html("<input type='hidden' name='collection' value='P' />"); // ADDED LINE
		}
// Limoges OR Damier
		else if ( $(this).val() == 'L' )
		{
			$('div.edge').html("");
			$('div.screw').html("<input type='hidden' name='edge_screw' value='D'>");
			console.log("L OR K");
			$('div.hiddenfield').html("<input type='hidden' name='collection' value='L' />"); // ADDED LINE
		}
		else if ( $(this).val() == 'K' )
		{
			$('div.edge').html("");
			$('div.screw').html("<input type='hidden' name='edge_screw' value='D'>");
			console.log("L OR K");
			$('div.hiddenfield').html("<input type='hidden' name='collection' value='K' />"); // ADDED LINE
		}
// Classique
		else if ( $(this).val() == 'C'  )
		{
			sessionStorage.runnerA = 'C';
			$('div.edge').html("");
			$('div.screw').html(""+
			"<h4>Screws</h4>"+
			"<div class='radio padRad1'>"+
			"<label>"+
			"<input type='radio' class='screw' name='screw' value='yes'> Visible Screws"+
			"</label>"+
			"<label>"+
			"<input type='radio' class='screw' name='screw' value='no'> Hidden Screws"+
			"</label>"+
			"</div>");
			$('div.hiddenfield').html("<input type='hidden' name='collection' value='C' />"); // ADDED LINE
		}
// Ellipse
		else if ( $(this).val() == 'E' )
		{
			sessionStorage.runnerA = 'E';
			$('div.edge').html("");
			$('div.screw').html(""+
			"<h4>Screws</h4>"+
			"<div class='radio padRad1'>"+
			"<label>"+
			"<input type='radio' class='screw' name='edge_screw' value='B'> Visible Screws"+
			"</label>"+
			"<label>"+
			"<input type='radio' class='screw' name='edge_screw' value='D'> Hidden Screws"+
			"</label>"+
			"</div>");
			$('div.hiddenfield').html("<input type='hidden' name='collection' value='E' />"); // ADDED LINE
		}
	});

// POPULATING SIZE FROM ORIENTATION
// Horizontal
	$(document).on('click', 'input.horizontal', function(){
		$('div.size').html(""+
		"<div class='radio padRad1'>"+
		"<label>"+
			"<input type='radio' name='size' orientation='horizontal' class='size' value='3008'>82 x 82"+
		"</label>"+
		"</div>"+
		"<br>"+
		"<div class='radio padRad1'>"+
		"<label>"+
			"<input type='radio' name='size' orientation='horizontal' class='size' value='3000'>117 x 82"+
		"</label>"+
		"</div>"+
		"<br>"+
		"<div class='radio padRad1'>"+
		"<label>"+
			"<input type='radio' name='size' orientation='horizontal' class='size' value='3002'>144 x 82"+
		"</label>"+
		"</div>"+
		"<br>");
	});
// Vertical
	$(document).on('click', 'input.vertical', function(){
		$('div.size').html(""+

		"<div class='radio padRad1'>"+
		"<label>"+
			"<input type='radio' name='size' orientation='horizontal' class='size' value='3008'>82 x 82"+
		"</label>"+
		"</div>"+
		"<br>"+
		"<div class='radio padRad1'>"+
		"<label>"+
			"<input type='radio' name='size' orientation='horizontal' class='size' value='3001'>82 x 117"+
		"</label>"+
		"</div>"+
		"<br>"+
		"<div class='radio padRad1'>"+
		"<label>"+
			"<input type='radio' name='size' orientation='horizontal' class='size' value='3003'>82 x 144"+
		"</label>"+
		"</div>"+
		"<br>");
	});




	// POPULATING MECHANISMS FROM SIZE
	$(document).on('click', 'input.size', function(){
		$('input.matchFinish').prop('checked', false);
		// 82x82
		if( $(this).val() == '3008' )
		{
			var sid = 0;
			console.log('3008 - 82x82 - 0');
		}
		// 82x117
		else if ( $(this).val() == '3000' )
		{
			var sid = 1;
			console.log('3000 - 117x82 - 1'); //change
		}
		// 82x144
		else if ( $(this).val() == '3003' )
		{
			var sid = 3;
			console.log('3003 - 82x144 - 3');
		}
		// 117x82
		else if ( $(this).val() == '3001' )
		{
			var sid = 2;
			console.log('3001 - 82x117 - 2'); //change
		}
		// 144x82
		else if ( $(this).val() == '3002' )
		{
			var sid = 4;
			console.log('3002 - 144x82 - 4');
		}

		$.post(
			'/retrieveMechanisms',

			'id=' + sid,
			function(rows)
			{
				$('select.mechanism').html('');
				$.each(rows, function(i, row)
				{
					$('select.mechanism').append(""+
					"<option value="+row.reference_code+">"+row.configuration+"</option>"
					);
					console.log(row);
				});
			},
			'json'
		);
	});


	$(document).on('click', 'input.matchFinish', function(){ //change add

		if($(this).is(":checked"))
		{
			console.log("CHECKED");
			console.log($('input[name=size]:checked').val());
			if($('input[name=size]:checked').val() == "3008") // 82x82
			{
				$('select.mechanism').html(""+
					"<option value='A1100250'>1 Inv M</option>"+
					"<option value='A1100260'>2 Inv M column</option>"+
					"<option value='A1100261'>2 Inv M row</option>"
				);

			}
			else if($('input[name=size]:checked').val() == "3000") // 117x82
			{
				$('select.mechanism').html(""+
					"<option value='A1100250'>1 Inv M</option>"+
					"<option value='A1100260'>2 Inv M en colonne</option>"+
					"<option value='A1100261'>2 Inv M en ligne</option>"+
					"<option value='A1100270'>3 Inv M en colonne</option>"+
					"<option value='A1100280'>4 Inv M</option>"+
					"<option value='A1100760'>1 V&V + 1 Inv M column</option>"+
					"<option value='A1100761'>1 V&V + 1 Inv M row</option>"+
					"<option value='A1100770'>1 V&V + 2 Inv M column</option>"+
					"<option value='A1100771'>1 V&V + 2 INV M triangle</option>"+
					"<option value='A1100780'>1 V&V + 3 Inv M square</option>"+
					"<option value='A1100810'>2 V&V + 1 Inv M triangle</option>"+
					"<option value='A1100820'>2 V&V + 2 Inv M</option>"
				);

			}
			else if($('input[name=size]:checked').val() == "3003") // 82x144
			{
				$('select.mechanism').html(""+
					"<option value='A1100250'>1 Inv M</option>"+
					"<option value='A1100260'>2 Inv M column</option>"+
					"<option value='A1100261'>2 Inv M row</option>"+
					"<option value='A1100270'>3 Inv M column</option>"+
					"<option value='A1100280'>4 Inv M square</option>"+
					"<option value='A1100290'>5 Inv M (3 /2 configuration)</option>"+
					"<option value='A1100300'>6 Inv M (3/3 configuration)</option>"+
					"<option value='A1100760'>1 V&V + 1 Inv M column</option>"+
					"<option value='A1100761'>1 V&V + 1 Inv M row</option>"+
					"<option value='A1100770'>1 V&V + 2 Inv M column</option>"+
					"<option value='A1100771'>1 V&V + 2 INV M triangle</option>"+
					"<option value='A1100780'>1 V&V + 3 Inv M</option>"+
					"<option value='A1100790'>1 V&V + 4 Inv M</option>"+
					"<option value='A1100800'>1 V&V + 5 Inv M</option>"+
					"<option value='A1100810'>2 V&V + 1 Inv M</option>"+
					"<option value='A1100820'>2 V&V + 2 Inv M</option>"+
					"<option value='A1100830'>2 V&V + 3 Inv M</option>"+
					"<option value='A1100840'>2 V&V + 4 Inv M</option>"+
					"<option value='A1100850'>3 V&V + 1 Inv M</option>"+
					"<option value='A1100860'>3 V&V + 2 Inv M</option>"+
					"<option value='A1100870'>3 V&V + 3 Inv M</option>"+
					"<option value='A1100880'>4 V&V + 1 Inv M</option>"+
					"<option value='A1100890'>4 V&V + 2 Inv M</option>"+
					"<option value='A1100900'>5 V&V + 1 Inv M</option>"+
					"<option value='A1101210'>1 BP + 1 Inv M column</option>"+
					"<option value='A1101211'>1 BP + 1 Inv M row</option>"+
					"<option value='A1101220'>1 BP + 2 Inv M column</option>"+
					"<option value='A1101230'>1 BP + 3 Inv M</option>"+
					"<option value='A1101240'>1 BP + 4 Inv M</option>"+
					"<option value='A1101250'>1 BP + 5 Inv M</option>"+
					"<option value='A1101260'>2 BP + 1 Inv M</option>"+
					"<option value='A1101270'>2 BP + 2 Inv M</option>"+
					"<option value='A1101280'>2 BP + 3 Inv M</option>"+
					"<option value='A1101290'>2 BP + 4 Inv M</option>"+
					"<option value='A1101300'>3 BP + 1 Inv M</option>"+
					"<option value='A1101310'>3 BP + 2 Inv M</option>"+
					"<option value='A1101320'>3 BP + 3 Inv M</option>"+
					"<option value='A1101330'>4 BP + 1 Inv M</option>"+
					"<option value='A1101340'>4 BP + 2 Inv M</option>"+
					"<option value='A1101350'>5 BP + 1 Inv M</option>"+
					"<option value='A1101510'>1 BPE + 1 Inv M</option>"+
					"<option value='A1101520'>1 BPE + 2 Inv M</option>"+
					"<option value='A1101530'>1 BPE + 3 Inv M</option>"+
					"<option value='A1101540'>1 BPE + 4 Inv M</option>"+
					"<option value='A1101550'>1 BPE + 5 Inv M</option>"+
					"<option value='A1101560'>2 BPE + 1 Inv M</option>"+
					"<option value='A1101570'>2 BPE + 2 Inv M</option>"+
					"<option value='A1101580'>2 BPE + 3 Inv M</option>"+
					"<option value='A1101590'>2 BPE + 4 Inv M</option>"+
					"<option value='A1101600'>3 BPE + 1 Inv M</option>"+
					"<option value='A1101610'>3 BPE + 2 Inv M</option>"+
					"<option value='A1101620'>3 BPE + 3 Inv M</option>"+
					"<option value='A1101630'>4 BPE + 1 Inv M</option>"+
					"<option value='A1101640'>4 BPE + 2 Inv M</option>"+
					"<option value='A1101650'>5 BPE + 1 Inv M</option>"
				);

			}
			else if($('input[name=size]:checked').val() == "3001") // 82x117
			{
				$('select.mechanism').html(""+
					"<option value='A1100250'>1 Inv M</option>"+
					"<option value='A1100260'>2 Inv M en colonne</option>"+
					"<option value='A1100261'>2 Inv M en ligne</option>"+
					"<option value='A1100270'>3 Inv M en colonne</option>"+
					"<option value='A1100280'>4 Inv M</option>"+
					"<option value='A1100760'>1 V&V + 1 Inv M column</option>"+
					"<option value='A1100761'>1 V&V + 1 Inv M row</option>"+
					"<option value='A1100770'>1 V&V + 2 Inv M column</option>"+
					"<option value='A1100771'>1 V&V + 2 INV M triangle</option>"+
					"<option value='A1100780'>1 V&V + 3 Inv M square</option>"+
					"<option value='A1100810'>2 V&V + 1 Inv M triangle</option>"+
					"<option value='A1100820'>2 V&V + 2 Inv M</option>"
				);
			}
			else if($('input[name=size]:checked').val() == "3002") // 144x82
			{
				$('select.mechanism').html(""+
					"<option value='A1100250'>1 Inv M</option>"+
					"<option value='A1100260'>2 Inv M column</option>"+
					"<option value='A1100261'>2 Inv M row</option>"+
					"<option value='A1100270'>3 Inv M column</option>"+
					"<option value='A1100280'>4 Inv M square</option>"+
					"<option value='A1100290'>5 Inv M (3 /2 configuration)</option>"+
					"<option value='A1100300'>6 Inv M (3/3 configuration)</option>"+
					"<option value='A1100760'>1 V&V + 1 Inv M column</option>"+
					"<option value='A1100761'>1 V&V + 1 Inv M row</option>"+
					"<option value='A1100770'>1 V&V + 2 Inv M column</option>"+
					"<option value='A1100771'>1 V&V + 2 INV M triangle</option>"+
					"<option value='A1100780'>1 V&V + 3 Inv M</option>"+
					"<option value='A1100790'>1 V&V + 4 Inv M</option>"+
					"<option value='A1100800'>1 V&V + 5 Inv M</option>"+
					"<option value='A1100810'>2 V&V + 1 Inv M</option>"+
					"<option value='A1100820'>2 V&V + 2 Inv M</option>"+
					"<option value='A1100830'>2 V&V + 3 Inv M</option>"+
					"<option value='A1100840'>2 V&V + 4 Inv M</option>"+
					"<option value='A1100850'>3 V&V + 1 Inv M</option>"+
					"<option value='A1100860'>3 V&V + 2 Inv M</option>"+
					"<option value='A1100870'>3 V&V + 3 Inv M</option>"+
					"<option value='A1100880'>4 V&V + 1 Inv M</option>"+
					"<option value='A1100890'>4 V&V + 2 Inv M</option>"+
					"<option value='A1100900'>5 V&V + 1 Inv M</option>"+
					"<option value='A1101210'>1 BP + 1 Inv M column</option>"+
					"<option value='A1101211'>1 BP + 1 Inv M row</option>"+
					"<option value='A1101220'>1 BP + 2 Inv M column</option>"+
					"<option value='A1101230'>1 BP + 3 Inv M</option>"+
					"<option value='A1101240'>1 BP + 4 Inv M</option>"+
					"<option value='A1101250'>1 BP + 5 Inv M</option>"+
					"<option value='A1101260'>2 BP + 1 Inv M</option>"+
					"<option value='A1101270'>2 BP + 2 Inv M</option>"+
					"<option value='A1101280'>2 BP + 3 Inv M</option>"+
					"<option value='A1101290'>2 BP + 4 Inv M</option>"+
					"<option value='A1101300'>3 BP + 1 Inv M</option>"+
					"<option value='A1101310'>3 BP + 2 Inv M</option>"+
					"<option value='A1101320'>3 BP + 3 Inv M</option>"+
					"<option value='A1101330'>4 BP + 1 Inv M</option>"+
					"<option value='A1101340'>4 BP + 2 Inv M</option>"+
					"<option value='A1101350'>5 BP + 1 Inv M</option>"+
					"<option value='A1101510'>1 BPE + 1 Inv M</option>"+
					"<option value='A1101520'>1 BPE + 2 Inv M</option>"+
					"<option value='A1101530'>1 BPE + 3 Inv M</option>"+
					"<option value='A1101540'>1 BPE + 4 Inv M</option>"+
					"<option value='A1101550'>1 BPE + 5 Inv M</option>"+
					"<option value='A1101560'>2 BPE + 1 Inv M</option>"+
					"<option value='A1101570'>2 BPE + 2 Inv M</option>"+
					"<option value='A1101580'>2 BPE + 3 Inv M</option>"+
					"<option value='A1101590'>2 BPE + 4 Inv M</option>"+
					"<option value='A1101600'>3 BPE + 1 Inv M</option>"+
					"<option value='A1101610'>3 BPE + 2 Inv M</option>"+
					"<option value='A1101620'>3 BPE + 3 Inv M</option>"+
					"<option value='A1101630'>4 BPE + 1 Inv M</option>"+
					"<option value='A1101640'>4 BPE + 2 Inv M</option>"+
					"<option value='A1101650'>5 BPE + 1 Inv M</option>"
				);
			}

		}
		else
		{
			console.log("UNCHECKED");
			console.log($('input[name=size]:checked').val());
			if($('input[name=size]:checked').val() == "3008") { var sid = 0; }
			else if($('input[name=size]:checked').val() == "3000") { var sid = 1; }
			else if($('input[name=size]:checked').val() == "3003") { var sid = 3; }
			else if($('input[name=size]:checked').val() == "3001") { var sid = 2; }
			else if($('input[name=size]:checked').val() == "3002") { var sid = 4; }
			$.post(
				'/retrieveMechanisms',
				'id=' + sid,
				function(rows)
				{
					$('select.mechanism').html('');
					$.each(rows, function(i, row)
					{
						$('select.mechanism').append(""+
							"<option value="+row.reference_code+">"+row.configuration+"</option>"
						);
						console.log(row);
					});
				},
				'json'
			);
		}
	});





// CLICK: input SCREW
	$(document).on('click', 'input.screw', function(){
// From Collection: Classique > Screws: No
		if ( sessionStorage.runnerA == 'C' )
		{
			$('div.edge').html(""+
			"<h4>Edge</h4>"+
			"<div class='radio padRad1'>"+
			"<label>"+
				"<input type='radio' class='edge' name='edge_screw' value='A'> Beveled"+
			"</label>"+
			"<label>"+
				"<input type='radio' class='edge' name='edge_screw' value='B'> Straight"+
			"</label>"+
			"</div>");
			sessionStorage.temp = null;
		}

		if( sessionStorage.runnerA == 'C' && $(this).attr('value') == 'no' )
		{
			$('div.hiddenfield').html("<input type='hidden' name='collection' value='D' />");
			$('div.edge').html(""+
			"<h4>Edge</h4>"+
			"<div class='radio padRad1'>"+
			"<label>"+
				"<input type='radio' class='edge' name='edge_screw' value='C'> Beveled"+
			"</label>"+
			"<label>"+
				"<input type='radio' class='edge' name='edge_screw' value='D'> Straight"+
			"</label>"+
			"</div>");

		}
		if( sessionStorage.runnerA == 'E' && $(this).attr('value') == 'D' )
		{
			$('div.hiddenfield').html("<input type='hidden' name='collection' value='F' />");
		}

// From Collection: Elipse > Edge: Yes
		if( sessionStorage.runnerA == 'E' && $(this).attr('value') == 'yes' )
		{
			sessionStorage.runnerA == null;
			$('div.hiddenfield').html("<input type='hidden' name='collection' value='D' />");
		}
	});

	$(document).on('click', 'input.edge', function(a){
		console.log(a);

	});

	</script>
</body>
</html>
