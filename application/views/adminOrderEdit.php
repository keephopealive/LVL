<html>
<head>
	<title>Admin Order Edit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<h3>This is where the admin can edit/view an order</h3>
	<a href="/admin/dashboard"><button class='btn btn-primary'>Dashboard</button></a>
	<a href="/logout"><button class='btn btn-danger'>Logout</button></a>	
	<div>
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
			<th>Quantity</th>
			<th>Engraving</th>
			<th>Collection</th>
			<th>Size</th>
		<th>Plate</th>
		<th></th>
		</thead>
<?php	foreach($productitems as $productitem)
		{
?>			<tr>
				<td><?= $productitem['reference_no']?></td>
				<td><?= $productitem['note']?></td>
				<td><?= $productitem['quantity']?></td>
				<td><?= $productitem['engraving']?></td>
				<td>Classique</td>
				<td>82x82</td>
			</tr>
<?php	}
?>	</table>
</body>
</html>