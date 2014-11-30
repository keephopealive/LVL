<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">


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
					window.location.replace("/dashboard");
				}
			},
			'json'
		);
		return false;
	});

	// POPULATING SIZE FROM ORIENTATION

	// Horizontal
	$(document).on('click', 'input.horizontal', function(){
		$('div.size').html(""+
		"<div class='radio'>"+
			"<label>"+
				"<input type='radio' class='size' name='size' value='3008'> 82x82"+
			"</label>"+
		"</div>"+
		"<br>"+
		"<div class='radio'>"+
			"<label>"+
				"<input type='radio' class='size' name='size' value='3001' orientation='horizontal'> 117x82"+
			"</label>"+
		"</div>"+
		"<br>"+
		"<div class='radio'>"+
			"<label>"+
				"<input type='radio' class='size' name='size' value='3002' orientation='horizontal'> 144x82"+
			"</label>"+
		"</div>"+
		"<br>");
	});

	// Vertical
	$(document).on('click', 'input.vertical', function(){
		$('div.size').html(""+
		"<div class='radio'>"+
			"<label>"+
				"<input type='radio' class='size' name='size' value='3008'> 82x82"+
			"</label>"+
		"</div>"+
		"<br>"+
		"<div class='radio'>"+
			"<label>"+
				"<input type='radio' class='size' name='size' value='3000' orientation='vertical'> 82x117 "+
			"</label>"+
		"</div>"+
		"<br>"+
		"<div class='radio'>"+
			"<label>"+
				"<input type='radio' class='size' name='size' value='3003' orientation='vertical'> 82x144"+
			"</label>"+
		"</div>"+
		"<br>");
	});

	// POPULATING MECHANISMS FROM SIZE
	$(document).on('click', 'input.size', function(){
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
			console.log('3000 - 82x117 - 1');
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
			console.log('3001 - 117x82 - 2');
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
				$('div.mechanism').html('');
				$.each(rows, function(i, row)
				{
					$('div.mechanism').append(""+
					"<div class='radio'>"+
						"<label>"+
						"<input type='radio' name='mechanism' value='"+row.reference_code+"'>"+row.configuration+
						"</label>"+
					"</div>"+
					"<br>");
					console.log(row);
				});
				
			},
			'json'
		);
	});

	$(document).on('click', 'input.collection', function(){
		// POPULATING FINISH AND EDGE/SCREW FROM COLLECTION
		// Classique
		if ( $(this).val() == 'C' )
			var cid = "C";  
		// Elipse  
		else if ( $(this).val() == 'E' )
			var cid = "E";  
		// Pierrot  
		else if ( $(this).val() == 'P' )
			var cid = "P";  
		// Limoges  
		else if ( $(this).val() == 'L' )
			var cid = "L";  
		// Damier
		else if ( $(this).val() == 'K' )
			var cid = "K";  

		$.post(
			'/retrieveFinishandEdgeScrew',
			'id=' + cid,
			function(sets)
			{
				console.log(sets);
				// Sets['finish'] Sets['EdgeScrew']
			},
			'json'
		);

	});





	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row top50">

		<div class="col-sm-3 col-sm-offset-1">
			<a href="/dashboard"><button class='btn btn-lg btn-primary btn-block'>Home</button></a>
		</div>
		<div class="col-sm-4">
			<a href="/profile"><button class='btn btn-lg btn-warning btn-block'>Profile</button></a>
		</div>
		<div class="col-sm-3" >
			<a href="/logout"><button class='btn btn-lg btn-danger btn-block'>Logout</button></a>	
		</div>
	</div>

	<div class='errors'>
	</div>

	<div class="row top50">
		<div class="col-sm-10 col-sm-offset-1 tool">
			<form method='post' action='/orders/createOrder' role="form" class="form-inline" id="createOrderForm">
				<input type="hidden" name="price" value="F">
					<div class="row">	


<!-- ORIENTATION -->
<div class="col-xs-4 col-sm-3 col-sm-offset-1">
	<h4>Orientation</h4>
	<div class="orientation"> <!-- ORIENTATION OPTIONS DIV -->
		<div class="radio">
			<label>
				<input type="radio" class="horizontal" name="orientation" value="horizontal"> Horizontal
			</label>
		</div>
		<br>
		<div class="radio">
			<label>
				<input type="radio" class="vertical" name="orientation" value="vertical"> Vertical
			</label>
		</div>
	</div>
</div>
<!-- END ORIENTATION -->


<!-- SIZE -->
<div class="col-xs-4 col-sm-3 col-sm-offset-1">
	<h4>Plate Size</h4>
	<div class="size">	<!-- APPENDING SIZE OPTIONS -->
		<p>Select orientation first.</p>
	</div>
</div>
<!-- END SIZE -->


<!-- COLLECTION -->
<div class="col-xs-4 col-sm-3 col-sm-offset-1" id="collection">
	<h4>Collection</h4>
	<div class="collection"> <!-- COLLECTION OPTIONS DIV -->
		<div class="radio">
			<label>
				<input type="radio" class="collection" name="collection" value="C"> Classique
			</label>
		</div>
		<br>
		<div class="radio">
			<label>
				<input type="radio" class="collection" name="collection" value="E"> Elipse
			</label>
		</div>
		<br>
		<div class="radio">
			<label>
				<input type="radio" class="collection" name="collection" value="P"> Pierrot
			</label>
		</div>
		<br>
		<div class="radio">
			<label>
				<input type="radio" class="collection" name="collection" value="L"> Limoges
			</label>
		</div>
		<br>
		<div class="radio">
			<label>
				<input type="radio" class="collection" name="collection" value="K"> Damier
			</label>
		</div>
	</div>
</div>
<!-- END COLLECTION -->


					</div>	
					<div class="row top50">


<!-- FINISH -->
<div class="col-sm-3 col-sm-offset-1">
	<h4>Finish</h4>
	<div class="orientation"> <!-- FINISH OPTIONS DIV -->
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
	</div>
</div>
<!-- END FINISH -->



<!-- MECHANISM -->
<div class="col-sm-3 col-sm-offset-1">
	<h4>Mechanisms</h4>
	<div class="mechanism"> <!-- MECHANISM OPTIONS DIV -->
		
	</div>
</div>
<!-- END MECHANISM  -->



<!-- EDGE / SCREW -->
<div class="col-sm-3 col-sm-offset-1">
	<h4>Edge/Screw</h4>
	<div class="edge_screw"> <!-- EDGE & SCREW OPTIONS DIV -->
		<div class="radio">
			<label>
				<input type="radio" name="edge_screw" value="X"> default
			</label>
		</div>
		<input type="text" name='note'>
		<button type="submit" class="btn btn-default pull-right top50">Submit</button>
	</div>
</div>
<!-- END EDGE / SCREW -->
				
					</div>
				</form>
			</div>
		</div>

	</div>