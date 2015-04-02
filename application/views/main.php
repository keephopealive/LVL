<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LVL USA</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
	<script src="/assets/js/jquery-1.11.2.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	
</head>
<body>

<div class="container-fluid viewport">

<!-- HEADER ===================	 -->
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<a href="http://lvl-usa.com"><img src="assets/img/lvl_logo_6.png" class="img-responsive center-block"></a>
		</div>
		<div class="col-sm-8 col-sm-offset-2" style="margin-top:25px;">
			<p class="headTag">Exclusive Distributor of <span style="color:rgb(238,34,43);">Meljac</span> in North America</p>
		</div>
	</div>
	<!-- <div class="row header parent">
		<div class="col-sm-2 col-sm-offset-2">
			<img src="assets/img/lvl_logo_6.png" class="img-responsive">
		</div>
		<div class="col-sm-6 topBorder">
			<p class="headTag pull-right">Exclusive Distributor of <span style="color:rgb(238,34,43);">Meljac</span> in North America</p>
		</div>
	</div> -->


<!-- END HEADER ================= -->

<!-- NAVBAR ===================== -->

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

<!-- END NAVBAR ================= -->


	<div class="row content">
	<!-- ADD IMG CAROUSEL or ABOUT COPY etc using jQuery html-->
	

	<!-- IMG CAROUSEL=========================================== -->
	<div class="col-sm-10 col-sm-offset-1">
		<div id="myCarousel" class="carousel slide" data-interval="3000">
			
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
				<li data-target="#myCarousel" data-slide-to="6"></li>
				<li data-target="#myCarousel" data-slide-to="7"></li>
				<li data-target="#myCarousel" data-slide-to="8"></li>
				<li data-target="#myCarousel" data-slide-to="9"></li>
				<li data-target="#myCarousel" data-slide-to="10"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<img src="assets/img/caro/1.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/2.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/3.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/4.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/4_2.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/5.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/6.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/7.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/8.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/9.jpg" class="img-responsive center-block"/>
				</div>
				<div class="item">
					<img src="assets/img/caro/10.jpg" class="img-responsive center-block"/>
				</div>
			</div>

			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
	</a>

	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
	</a>

		</div>
	</div>
	<!-- END IMG CAROUSEL======================================= -->
	</div>

	<!-- BOTTOM NAV ======================== -->
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

<!-- END BOTTOM NAV ==================== -->


<script type="text/javascript">
	$(document).on('click', '#about', function(){
		$('div.content').html(""+
		"<div class='row about'>"+
			"<div class='col-sm-4 col-sm-offset-2'>"+
				"<img src='assets/img/lvl_about_1.jpg' class='img-responsive'>"+
			"</div>"+
			"<div class='col-sm-4'>"+
				"<p>LVL-USA is proud to be the exclusive distributor of Meljac in the United States and Canada.</p>"+

				"<p>Since 1995 Meljac has produced beautiful electrical hardware, outfitting many of the finest residences, hotels and institutions around the world.  From their factory outside of Paris, Meljac brings together high-precision manufacturing technology with hand finishing and care to create products of the highest quality.</p>"+

				"<p>The products Meljac creates are rooted in clean design and solid engineering, with a commitment to using the best materials available.  Working mainly in solid brass, Meljac also offers products using back-painted glass and Limoges porcelain. </p>"+

				"<p>Meljac elevates aesthetically overlooked areas of the home to a level of subtle refinement and functionality.  These heightened details, along with the range of finishes and custom options available, provide an impressive element to any environment.  Since all Meljac items are made-to-order they can be customized to suit the needs of any individual style and taste.</p>"+

				"<p>All Meljac products available through LVL-USA are UL and CSA approved.</p>"+
			"</div>"+
		"</div>"
		);
	});

	$(document).on('click', '#catalog', function(){
		$('div.content').html(""+
		"<div class='row about'>"+
			"<div class='col-sm-4 col-sm-offset-2'>"+
				"<img src='assets/img/lvl_about_1.jpg' class='img-responsive'>"+
			"</div>"+
			"<div class='col-sm-4'>"+
				"<p>LVL-USA is proud to be the exclusive distributor of Meljac in the United States and Canada.</p>"+

				"<p>Since 1995 Meljac has produced beautiful electrical hardware, outfitting many of the finest residences, hotels and institutions around the world.  From their factory outside of Paris, Meljac brings together high-precision manufacturing technology with hand finishing and care to create products of the highest quality.</p>"+

				"<p>The products Meljac creates are rooted in clean design and solid engineering, with a commitment to using the best materials available.  Working mainly in solid brass, Meljac also offers products using back-painted glass and Limoges porcelain. </p>"+

				"<p>Meljac elevates aesthetically overlooked areas of the home to a level of subtle refinement and functionality.  These heightened details, along with the range of finishes and custom options available, provide an impressive element to any environment.  Since all Meljac items are made-to-order they can be customized to suit the needs of any individual style and taste.</p>"+

				"<p>All Meljac products available through LVL-USA are UL and CSA approved.</p>"+
			"</div>"+
		"</div>"
		);
	});

	$(document).on('click', '#trade', function(){
		$('div.content').html(""+
		"<div class='row regLogin'>"+
			"<div class='col-sm-8 col-sm-offset-2'>"+
				"<div class='regInfo'>"+
					"<p><strong>With our integrator order entry system and cut sheet generator, trade professionals can:</strong></p><br>"+
					"<ul>"+
						'<li>Select and customize standard Meljac keypads and outlets up to 5.7” (144 mm) in length</li>'+
						"<li>Add selections to a project order</li>"+
						"<li>Download accompanying product cut sheets</li>"+
						"<li>Request a price quote for the order</li>"+
					"</ul><br>"+
					'<p>For any plates larger than 5.7” (144 mm) or customization options/products not currently available through the order entry system, please contact <a href="/contact">LVL-USA</a>.</p>'+
					'<p>All Meljac electrical hardware is made-to-order with lead times of eight to ten weeks.  The proprietary back boxes included with any order ship when LVL-USA receives a deposit amount equal to half of the total order.</p>'+
				"</div>"+
			"</div>"+
			"<div class='col-sm-4 col-sm-offset-2 top50'>"+
				"<form method='post' action='/registration'>"+
				"<h3>Register</h3>"+
				"<div class='errors'>"+
				<?= $this->session->flashdata('registration_msg'); ?>
				"</div>"+
				"<div class='form-group'>"+
					"<label class='inline'>First Name:</label>"+
					"<input type='text' name='first_name' class='form-control'>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label class='inline'>Last Name:</label>"+
					"<input type='text' name='last_name' class='form-control'>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label class='inline'>Email:</label>"+
					"<input type='email' name='email' class='form-control'>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label class='inline'>Profession</label>"+
					"<select name='profession' class='form-control'>"+
					  "<option>Architect</option>"+
					  "<option>AV Provider</option>"+
					  "<option>Builder</option>"+
					  "<option>Electrician</option>"+
					  "<option>Interior Designer</option>"+
					  "<option>Lighting Designer </option>"+
					  "<option>Private Individual </option>"+
					"</select>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label class='inline'>Password:</label>"+
					"<input type='password' name='password' class='form-control'>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label class='inline'>Confirm Password:</label>"+
					"<input type='password' name='confirm_password' class='form-control'>"+
				"</div>"+
				"<div class='form-group right'>"+
					"<input type='submit' value='Register' class='btn btn-default'>"+
				"</div>"+
			"</form>"+
			"</div>"+
			"<div class='col-sm-3 col-sm-offset-1 top50'>"+
				"<h3>Login</h3>"+
			"<h3><?= $this->session->flashdata('login_msg'); ?></h3>"+
			"<form method='post' action='/login'>"+
				"<div class='form-group'>"+
					"<label class='inline'>Email:</label>"+
					"<input type='email' name='email' class='form-control'>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label class='inline'>Password:</label>"+
					"<input type='password' name='password' class='form-control'>"+
				"</div>"+
				"<div class='form-group right'>"+
					"<input type='submit' value='Login' class='btn btn-default'>"+
				"</div>"+
			"</form>"+
			"</div>"+

		"</div>"
		);
	});
	
	$(document).on('click', '#faq', function(){
		$('div.content').html(""+
		"<div class='row faqs'>"+
			"<div class='col-sm-8 col-sm-offset-2'>"+
				"<h3 class='center-block'>Frequently Asked Questions</h3>"+
				"<p class='question'>Are Meljac’s keypads compatible with low-voltage home automation systems?</p>"+
				"<p class='answer'>Yes. Meljac push buttons and toggles are all dry contact closures and therefore can be integrated into any home automation system with a contact closure control interface, such as the Wallbox Closure Interface for the Lutron HomeWorks® QS system.  Through these interfaces Meljac’s keypads either mimc the functionality of a pre-existing keypad or be custom-programmed to fit the user’s need.</p>"+
				"<p class='question'>Does Meljac offer keypads for line voltage applications?</p>"+
				"<p class='answer'>Yes. There are three options for using Meljac with line voltage:</p>"+
				"<ul class='answerUl'>"+
					"<li><strong>Non-Dimming Toggle Switch</strong> – Both Meljac toggle switches are rated for 15A 120VAC and can be used for on/off lighting control.</li>"+
					"<li><strong>Rotary Dimmer</strong> – Meljac also offers a rotary dimmer plate rated for 15A 120 V.</li>"+
					"<li><strong>Dimming Toggle with Insteon® Micro Dimmer Module</strong> – Meljac toggle switches can also be used in conjunction with the Insteon® Micro Dimmer Module [insert hyperlink for Insteon PDF] which can handle loads of 5W - 100W at 140VAC.  Please note that the size of the Micro Dimmer Module limits the amount of controls that can fit in a plate.</li>"+
				"</ul>"+
				"<p class='question'>Are Meljac products UL approved?</p>"+
				"<p class='answer'>Yes.  All standard size Meljac keypads, outlets and proprietary back boxes are UL approved. </p>"+
				"<p class='question'>What is the lead-time for Meljac products?</p>"+
				"<p class='answer'>Since Meljac products are made-to-order, please allow 8-10 weeks for delivery from when LVL-USA receives a 50% deposit on standard orders.  More production time is required for custom orders.</p>"+
				"<p class='question'>Can I replace the light switches and plates currently in my home with Meljac?</p>"+
				"<p class='answer'>Meljac offers a plate that is sized to replace an American switch plate from 1-6 gangs.  See above for line-voltage options.</p>"+
				"<p class='question'>How do I place an order with LVL-USA for Meljac?</p>"+
				"<p class='answer'>Trade professionals can create an order and request a price quote using the integrator order entry system [insert hyperlink] on the LVL-USA website.  Here you will also find cut-sheets and more information on Meljac’s plates.  Please note that the order entry tool is currently limited to plates sizes of 5.7”/144 mm.  For any larger plates please contact LVL-USA.</p>"+
			"</div>"+
		"</div>"
		);
	});

	$(document).on('click', '#contact', function(){
		$('div.content').html(""+
		"<div class='row contact top50'>"+
			"<h3 class='center-block'>Contact LVL-USA</h3>"+
			"<div class='col-sm-3 col-sm-offset-2'>"+
				"<p class='office'>LVL-USA<br>445 Park Ave, Suite 901<br>New York, NY 10022<br>T: 212.836.4828<br>info@lvl-usa.com<br></p>"+
			"</div>"+
			"<div class='col-sm-5'>"+
				"<p >For general information or to schedule a studio visit, please contact us at info@lvl-usa.com. Showroom visits are by appointment only.</p>"+
				"<p>For more information on placing orders, please see the ordering <a href='#'>FAQs</a>.  Trade professionals can also use the <a href='#'>trade tool</a> to build an order and request a quote.</p>"+
			"</div>"+
		"</div>"
		);
	});

	$(document).on('click', '#catalog', function(){
		$('div.content').html(""+
		"<div class='row catalog top50'>"+
			"<h3 class='center-block'>Request a Catalog</h3>"+
			"<form class='form-horizontal'>"+
				"<div class='form-group'>"+
					"<label for='first_name' class='col-sm-3 col-sm-offset-1 control-label'>First Name</label>"+
					"<div class='col-sm-7'>"+
					"<input type='text' class='form-control' id='first_name'>"+
					"</div>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label for='last_name' class='col-sm-3 col-sm-offset-1 control-label'>Last Name</label>"+
					"<div class='col-sm-7'>"+
					"<input type='text' class='form-control' id='last_name'>"+
					"</div>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label for='company_name' class='col-sm-3 col-sm-offset-1 control-label'>Company Name</label>"+
					"<div class='col-sm-7'>"+
					"<input type='text' class='form-control' id='company_name'>"+
					"</div>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label for='address' class='col-sm-3 col-sm-offset-1 control-label'>Address</label>"+
					"<div class='col-sm-7'>"+
					"<input type='text' class='form-control' id='address' placeholder='Street Address'>"+
					"</div>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label for='city' class='col-sm-3 col-sm-offset-1 control-label'>City</label>"+
					"<div class='col-sm-7'>"+
					"<input type='text' class='form-control' id='city' >"+
					"</div>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label for='state' class='col-sm-3 col-sm-offset-1 control-label'>State</label>"+
					"<div class='col-sm-7'>"+
					"<input type='text' class='form-control' id='state' >"+
					"</div>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label for='postal_code' class='col-sm-3 col-sm-offset-1 control-label'>Postal Code</label>"+
					"<div class='col-sm-7'>"+
					"<input type='text' class='form-control' id='postal_code' >"+
					"</div>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label for='country' class='col-sm-3 col-sm-offset-1 control-label'>Country</label>"+
					"<div class='col-sm-7'>"+
					"<input type='text' class='form-control' id='country'>"+
					"</div>"+
				"</div>"+
				"<div class='form-group'>"+
					"<label for='contact_number' class='col-sm-3 col-sm-offset-1 control-label'>Contact Number</label>"+
					"<div class='col-sm-7'>"+
					"<input type='text' class='form-control' id='contact_number' aria-describedby='helpBlock'>"+
					"<span id='helpBlock' class='help-block'>*Required for hard copy of catalog sent via FedEx</span>"+
					"</div>"+
				"</div>	"+
				"<div class='col-sm-7 col-sm-offset-4 catalogRadio'>"+
					"<div class='radio'>"+
						"<label>"+
						"<input type='radio' name='delivery_method' id='optionsRadios1' value='digital' checked>"+
						"I would like access to a Digital Copy."+
						"</label>"+
					"</div>"+
					"<div class='radio'>"+
						"<label>"+
						"<input type='radio' name='delivery_method' id='optionsRadios2' value='mailed'>"+
						"Please send me a Catalog via FedEx"+
						"</label>"+
					"</div>"+
				"</div>"+
				"<div class='form-group'>"+
					"<div class='col-sm-offset-4 col-sm-10'>"+
					"<button type='submit' class='btn btnSmall'>Request Catalog</button>"+
					"</div>"+
				"</div>"+
			"</form>"+
		"</div>"
		);
	});
	
	 $(document).ready(function(){
        $('.carousel').carousel();
    });
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>