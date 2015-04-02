<html>
<head>
	<title>Admin Order Edit</title>
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
				<img src="../../assets/img/lvl_logo_6.png" class="img-responsive center-block">
			</div>
			<div class="col-sm-8 col-sm-offset-2" style="margin-top:25px;">
				<p class="headTag">Exclusive Distributor of <span style="color:rgb(238,34,43);">Meljac</span> in North America</p>
			</div>
		</div>

		<div class="row navbar">
			<div class="col-sm-4 col-sm-offset-4">
				<a href="/admins"><button class='btn btn-md btn-block'>Back to Dashboard</button></a>
			</div>
		</div>

		<div class="row top50">
			<div class="col-sm-6 col-sm-offset-3">
				<h3 style="text-align:center;"> Order Details</h3>
				<table class="table table-responsive table-bordered top50">
					<tr>
						<td>Project Name :</td>
						<td><?= $order['project_name'] ?></td>
					</tr>
					<tr>
						<td>Client Name :</td>
						<td><?= $user['first_name']?> <?= $user['last_name'] ?></td>
					</tr>
					<tr>
						<?php
							$phpdate = strtotime( $order['created_at']);
							$mysqldate = date( 'M d, Y g:i A', $phpdate );
						?>
						<td>Order Date :</td>
						<td><?= $mysqldate ?></td>
					</tr>
					<tr>
						<td>Order Admin Note:</td>
						<td>
							<form class="form" method='post' action='/order/saveAdminNote'>
								<input type='hidden' name='order_id' value="<?= $order['id'] ?>">
								<input type='text' name='admin_note' value="<?= $order['admin_note'] ?>">
								<input type='submit' class="pull-right" value='Save Admin Note'>
							</form>
						</td>
					</tr>
							<form action='/order/updateStatus' method='post'>
					<tr>
						<td>LVL Order Number :</td>
						<td>
								<input type="text" name="order_no" value="<?= $order['order_no']; ?>" placeholder="Input LVL Order No"/>
						</td>
					</tr>
					<tr>
						<td>Order Status : </td>
						<td>
							<select name='status'>
				<?php			if($order['status'] == 'Completed'){ ?>
									<option value='Completed' selected>Completed</option>
									<option value='Pending'>Pending</option>
				<?php			}
								else if($order['status'] == 'Pending'){ ?>
									<option value='Pending' selected>Pending</option>
									<option value='Completed'>Completed</option>					
				<?php			}
				?>
							</select>
							<input type='hidden' name='order_id' value='<?= $order['id']?>'>
							<input type='submit' class="pull-right" value='Save Order Status'>
						</td>
					</tr>
							</form>
					<tr>
						<td>Download Order Excel Sheet</td>
<!--						$order['excelsheet'] = $order['excelsheet']-->
<!--	EXCEL SHEET UPDATED IN THE DB -->
						<td><a href="../../excel/<?= $order['excelsheet']; ?>.xlsx"></td>
					</tr>
					<tr>
						<td>Client Note :</td>
						<td><?= $order['client_note'] ?></td>
					</tr>
				</table>
			</div>	
		</div>

		<div class="row top50">
			<div class="col-sm-10 col-sm-offset-1">
				<h3 style="text-align:center;"> Order Items</h3>
				<table class='table table-bordered top50'>
					<thead>
						<th>Reference No</th>
						<th>Room/Product Name</th>
						<th>Quantity</th>
						<th>Engraving</th>
						<th>PDF Cutsheet</th>
						<!-- <th>Collection</th> -->
						<!-- <th>Size</th> -->
					</thead>
			<?php	foreach($productitems as $productitem)
					{
			?>			<tr>
							<td><?php if(count($productitem['reference_no'])>0){ echo $productitem['reference_no']; }else{ echo "N/A"; } ?></td>
							<td><?php if(count($productitem['note'])>0){ echo $productitem['note']; }else{ echo "N/A"; } ?></td>
							<td><?php if(count($productitem['quantity'])>0){ echo $productitem['quantity']; }else{ echo "N/A"; } ?></td>
							<td><?php if(count($productitem['engraving'])>0){ echo $productitem['engraving']; }else{ echo "N/A"; } ?></td>
							<td><a href="././../../../pdf/<?= $productitem['pdf'];?>.pdf"><?= $productitem['pdf'];?></a></td>
							<!-- <td><?php if(count($productitem['collection'])>0){ echo $productitem['collection']; }else{ echo "N/A"; } ?></td> -->
							<!-- <td><?php if(count($productitem['size'])>0){ echo $productitem['size']; }else{ echo "N/A"; } ?></td> -->
						</tr>
			<?php	}
			?>	</table>
			</div>
		</div>

			<!-- <div>
				<label>Order ID: </label> <?= $order['id'] ?><br>
				<label>Order Client Note: </label> <?= $order['client_note'] ?><br>
				<label>Order Admin Note: 
				<form method='post' action='/order/saveAdminNote'>
					<input type='hidden' name='order_id' value="<?= $order['id'] ?>">
					<input type='text' name='admin_note' value="<?= $order['admin_note'] ?>">
					<input type='submit' value='Save Admin Note'>
				</form></label> <br>
				<label>Order LVL Order No: </label> <?= $order['project_name']?><br>
				<form action='/order/updateStatus' method='post'>
					<input type="text" name="order_no" value="<?= $order['order_no']; ?>" placeholder="Input LVL Order No"/>
					<select name='status'>
		<?php			if($order['status'] == 'Completed'){ ?>
							<option value='Completed' selected>Completed</option>
							<option value='Pending'>Pending</option>
		<?php			}
						else if($order['status'] == 'Pending'){ ?>
							<option value='Pending' selected>Pending</option>
							<option value='Completed'>Completed</option>					
		<?php			}
		?>
					</select>
					<input type='hidden' name='order_id' value='<?= $order['id']?>'>
					<input type='submit' value='Save Order Status'>
				</form>
				<label for="">File:</label>
				<a href="../../excel/<?= $order['excelsheet']; ?>.xlsx">
					<?php
						if(strlen($order['project_name'])>0)
							echo $order['project_name'];
						else
							echo "Proj Anon";
					?>
				</a>
				<label>Order Status: </label> <?= $order['status']?><br>
				<?php
					$phpdate = strtotime( $order['created_at']);
					$mysqldate = date( 'M d, Y g:i A', $phpdate );
				?>
				<label>Order Created Date: </label> <?= $mysqldate ?><br>
				<label>Client ID: </label> <?= $user['id']?> <br>
				<label>Client Name: </label> <?= $user['first_name']?> <?= $user['last_name'] ?><br>
			</div>
			<table class='table table-bordered'>
				<thead>
					<th>Reference No</th>
					<th>Room Name</th>
					<th>PDF Cutsheet</th>
					<th>Quantity</th>
					<th>Engraving</th>
					<th>Collection</th>
					<th>Size</th>
				</thead>
		<?php	foreach($productitems as $productitem)
				{
		?>			<tr>
						<td><?php if(count($productitem['reference_no'])>0){ echo $productitem['reference_no']; }else{ echo "N/A"; } ?></td>
						<td><?php if(count($productitem['note'])>0){ echo $productitem['note']; }else{ echo "N/A"; } ?></td>
						<td><a href="././../../../pdf/<?= $productitem['pdf'];?>.pdf"><?= $productitem['pdf'];?></a></td>
						<td><?php if(count($productitem['quantity'])>0){ echo $productitem['quantity']; }else{ echo "N/A"; } ?></td>
						<td><?php if(count($productitem['engraving'])>0){ echo $productitem['engraving']; }else{ echo "N/A"; } ?></td>
						<td><?php if(count($productitem['collection'])>0){ echo $productitem['collection']; }else{ echo "N/A"; } ?></td>
						<td><?php if(count($productitem['size'])>0){ echo $productitem['size']; }else{ echo "N/A"; } ?></td>
					</tr>
		<?php	}
		?>	</table> -->


	</div>
</body>
</html>