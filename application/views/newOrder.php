<html>
<head>
	<title>Create New Order (Add Productitems)</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
	<script src="/assets/js/jquery-1.11.2.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/dashboard.css">

</head>
<body>
	<div class="container-fluid viewport">
		
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<img src="/assets/img/lvl_logo_6.png" class="img-responsive center-block">
			</div>
			<div class="col-sm-8 col-sm-offset-2" style="margin-top:25px;">
				<p class="headTag">Exclusive Distributor of <span style="color:rgb(238,34,43);">Meljac</span> in North America</p>
			</div>
		</div>

		<!-- <div class="row navbar">
			<div class="col-sm-4 col-sm-offset-2">
				<h4> Create a New Order</h4>
			</div>
			<div class="col-sm-3 col-sm-offset-1">
				<a href="/dashboard"><button class='btn btn-md btn-block'>Back to Dashboard</button></a>
			</div>
		</div> -->
		<div class="row top50">
			<div class="col-sm-8 col-sm-offset-2">
				<h3 style="text-align:center;"> Create a New Order</h3>
			</div>
		</div>
		<div class="row orderInfo top50">
			<div class="col-sm-6 col-sm-offset-1">
				<form method='post' action='/order/updateOrderInfo' class="form-horizontal">
					<input type='hidden' name='order_id' value="<?= $order['id'] ?>">

					<div class="form-group">
						<label for="projectName" class="col-sm-2 control-label">Project Name</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="projectName" name='project_name'value="<?= $order['project_name'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="projectAddress" class="col-sm-2 control-label">Project Address</label>
						<div class="col-sm-6">
						<input type="text" class="form-control" id="projectAddress" name='project_address' value="<?= $order['project_address'] ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="clientNote" class="col-sm-2 control-label">Client Note:</label>
						<div class="col-sm-6">
						<input type="text" class="form-control" id="clientNote" name='client_note' value="<?= $order['client_note'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-6">
							<button type="submit" class="btn btn-default">Update Order Info</button>
						</div>
					</div>
				</form>
			</div>

			<div class="col-sm-3 orderAction1">
				<a href="/productitem/newProductitem/keypad"><button class='btn btn-lg btn-block orderAction1btn lvl-nav' style='margin-bottom:10%;'>Add Keypad</button></a>
				<a href="/productitem/newProductitem/outlet"><button class='btn btn-lg btn-block orderAction1btn lvl-nav'>Add Outlet</button></a>
			</div>


		</div>

		<!-- <div class="row orderAction1">
			<div class="col-sm-3 col-sm-offset-5">
				<a href="/productitem/newProductitem/keypad"><button class='btn btn-block orderAction1btn'>Add Keypad</button></a>
			</div>
			<div class="col-sm-3">
				<a href="/productitem/newProductitem/outlet"><button class='btn btn-block orderAction1btn'>Add Outlet</button></a>
			</div>
		</div>
 -->
		<div class="row orderTable">
			<div class="col-sm-10 col-sm-offset-1">
				<table class='table table-bordered table-hover'>
					<thead>
						<th class="col-sm-2">Reference No</th>
						<th class="col-sm-2">Room/Product Name</th>
						<th class="col-sm-1">Size</th>
						<th class="col-sm-1">Mechanisms</th>
						<th class="col-sm-1">Finish</th>
						<th class="col-sm-1">Quantity</th>
						<th class="col-sm-2">Engraving</th>
						<th class="col-sm-1">Cutsheet</th>
						<th class="col-sm-1">Delete</th>
					</thead>
<?php	foreach($productitems as $productitem)
		{
	?>				<tr>
						<td><?= $productitem['reference_no']?></td> 
						<td><?= $productitem['note']?></td>
						<td><?= $productitem['size']?></td>
						<td><?= $productitem['mechanism']?></td>
						<td><?= $productitem['finish']?></td>
						<td><?= $productitem['quantity']?></td>
						<td><?= $productitem['engraving']?></td> 
						<td><a class="btn delItem pull-right" href="././../../../pdf/<?= $productitem['pdf'];?>.pdf">PDF Download</a>
						</td>
						<td>
							<form method='post' action='/productitem/destroyProductitem'>
								<input type='hidden' name='productitem_id' value="<?= $productitem['id']; ?>">
								<input type='submit' class='btn delItem pull-right'value='Delete'>
							</form>
						</td>
					</tr>
<?php	}
?>				</table>
			</div>
		</div>

		<div class="row orderAction2">
			<div class="col-sm-3 col-sm-offset-2">
				<a href="/order/deleteOrder/<?= $order_id; ?>"><button class='btn btn-block lvl-nav'>Cancel Order</button></a>
			</div>
			<div class="col-sm-3 col-sm-offset-2">
				<a href="/order/updateOrder/<?= $order_id; ?>"><button class='btn btn-block lvl-nav'>Save Order</button></a>
			</div>
		</div>
	</div>

</body>
</html>