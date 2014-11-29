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
			<a href="/dashboard"><button class='btn btn-primary'>Home</button></a>
			<!-- <a href="#"><button class='btn btn-primary'>Promotions (inactive)</button></a> -->
			<a href="/profile"><button class='btn btn-warning'>Profile</button></a>
			<a href="/logout"><button class='btn btn-danger'>Logout</button></a>	
		</div>
	</div>

<form method='post' action='process.php'>
	<div class="row">
		<input type="hidden" name="price" value="F">
		<div class="col-xs-2">
			<h3>Plate Orientation</h3>
			<label>
				<input type="radio" id="orientation_horizontal" name="plate_orientation" value=""> Horizontal
			</label>
			<br>
			<label>
				<input type="radio" id="orientation_vertical" name="plate_orientation" value=""> Vertical
			</label>
		</div>
		<div class="col-xs-2" id="plate_size">
			<h3>Plate Size</h3>
			<p>Dependent upon Plate Orientation choice</p>
		</div>
		<div class="col-xs-2">
			<h3>Collection</h3>
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

		<div class="col-xs-2">
			<h3>Edge/Screw</h3>
			<label>
				<input type="radio" name="edge_screw" value="X" selected> default
			</label>
		</div>
		<div class="col-xs-2">
			<h3>Mechanisms</h3>
			<label>
				<input name='mechanism' type='radio' value="A1100010"> 1 V&V
				<input name='mechanism' type='radio' value="A1100201"> 2 INV A LINE
			</label>

		</div>
		<div class="col-xs-2">
			<h3>Finish</h3>
			<label>
				<select name="finish">
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
	</div>
	<div class='row'>
		<div class='col-xs-12'>
			<center><h1>
				Preview Img Here...
			</h1></center>
		</div>
	</div>
	<div class='row'>
		<div class='col-xs-12'>
			<input type='submit' value='Submit Order' class='btn btn-primary'>
		</div>
	</div>
</form>

		</div>
	</div>